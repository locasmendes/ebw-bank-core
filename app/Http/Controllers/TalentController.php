<?php

namespace App\Http\Controllers;

use App\Exports\TalentsExport;
use App\Mail\TalentsMail;
use App\Models\Talent;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class TalentController extends Controller
{
    public function index()
    {
        return view('site.talent');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'document_cpf' => 'nullable|string',
            'document_rg' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'cep' => 'nullable|string',
            'company_1' => 'nullable|string',
            'function_1' => 'nullable|string',
            'company_2' => 'nullable|string',
            'function_2' => 'nullable|string',
            'company_3' => 'nullable|string',
            'function_3' => 'nullable|string',
            'maior_realizacao' => 'nullable|string',
            'exerceu_lideranca' => 'nullable|string',
            'tipo_ambiente' => 'nullable|string',
            'escolaridade' => 'nullable|string',
            'conhecimento_informatica.*' => 'nullable|string',
            'conhecimento_linguas' => 'nullable|string',
            'area_trabalho' => 'nullable|string',
            'curriculo' => 'nullable|file|mimetypes:application/pdf',
        ]);

        if ($request->hasFile('curriculo')) {
            $path = $request->file('curriculo')->store('curricula', 'local');

            $data = Arr::set($data, 'curriculo', $path);
        }

        $talent = Talent::create($data);

        try {
            Mail::to(\config('mail.admin_mail'))->send(new TalentsMail($talent));
        } catch (\Throwable $th) {
            Log::error(json_encode($th));
        }

        return redirect()->route('talent.success');
    }

    public function success()
    {
        return view('site.talent-success');
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'date|nullable',
            'final_date' => 'date|nullable',
        ]);

        $talent = Talent::query()
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

        if (!$talent) {
            return redirect()->back()->with('invalid-date', true);
        }

        $filaname = function () use ($request) {
            $filename = 'banco-de-talentos';

            if (!is_null($request->input('start_date'))) {
                $filename .= '-de-' . Carbon::createFromDate($request->input('start_date'))->format('d_m_Y');
            }
            if (!is_null($request->input('final_date'))) {
                $filename .= '-ate-' . Carbon::createFromDate($request->input('final_date'))->format('d_m_Y');
            }
            return $filename . '.xlsx';
        };

        return Excel::download(new TalentsExport($request->input('start_date'), $request->input('final_date')), $filaname());

        return redirect()->back();
    }

    public function showCurriculo($hash)
    {
        try {
            $path = Crypt::decryptString($hash);

            $exists = Storage::disk('local')->exists($path);

            if (!$exists) {
                return 'Arquivo não encontrada!';
            }

            $realPath = Storage::disk('local')->path($path);

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
