<?php

namespace App\Http\Controllers;

use App\Exports\SubmissionsExport;
use App\Models\Submission;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('site.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'       => 'required|string|max:255',
            'phone'         => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'cpf-cnpj'        => 'required|string|max:255',
            'allow-infomation-whatsapp-sms' => 'boolean|nullable',
            'allow-infomation-email' => 'boolean|nullable'
        ], [
            'name.required' => 'O nome é obrigatório',
            'phone.required' => 'O telefone é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email está com formato incorreto',
            'cpf-cnpj.required' => 'O CPF ou CNPJ é obrigatório'
        ]);

        $data = collect($validate)->mapWithKeys(function ($item, $key) {
            return [Str::replace('-', '_', $key) => $item];
        })->toArray();

        // return view('test.image', \compact('base64'));

        // salvar o documento

        $submission = Submission::create($data);

        return redirect()->back()->with('submission-succeeded', true);
    }


    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'date|nullable',
            'final_date' => 'date|nullable',
        ]);

        $submission = Submission::query()
            ->tap(function ($query) use ($request) {
                if (!is_null($request->input('start_date'))) {
                    $query->whereDate('created_at', '>=', Carbon::createFromDate($request->input('start_date')));
                }
                if (!is_null($request->input('final_date'))) {
                    $query->whereDate('created_at', '<=', Carbon::createFromDate($request->input('final_date')));
                }
            })
            ->limit(1)
            ->exists();

        if (!$submission) {
            return redirect()->back()->with('invalid-date', true);
        }

        $filaname = function () use ($request) {
            $filename = 'peca-sua-maquininha';

            if (!is_null($request->input('start_date'))) {
                $filename .= '-de-' . Carbon::createFromDate($request->input('start_date'))->format('d_m_Y');
            }
            if (!is_null($request->input('final_date'))) {
                $filename .= '-ate-' . Carbon::createFromDate($request->input('final_date'))->format('d_m_Y');
            }
            return $filename . '.xlsx';
        };

        return Excel::download(new SubmissionsExport($request->input('start_date'), $request->input('final_date')), $filaname());

        return redirect()->back();
    }

    public function document($hash)
    {
        try {
            $path = decrypt($hash);

            $exists = Storage::exists($path);
            if (!$exists) {
                return 'Imagem não encontrada!';
            }

            $realPath = Storage::path($path);
            $type = pathinfo($realPath, PATHINFO_EXTENSION);
            $data = file_get_contents($realPath);

            $base64 = null;

            if ($type === 'pdf') {
                $base64 = 'data:application/' . $type . ';base64,' . base64_encode($data);
            } else {
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            }

            return view('documents.image', \compact(['base64', 'type']));
        } catch (DecryptException $e) {
            return \abort(422);
        }
    }
}
