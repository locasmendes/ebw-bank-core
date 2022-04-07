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

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'rg'         => 'required|string|max:255',
            'cpf'        => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'cep'        => 'required|string|max:255',
            'rua_quadra' => 'required|string|max:255',
            'numero'     => 'required|string|max:255',
            'bairro'     => 'required|string|max:255',
            'cidade'     => 'required|string|max:255',
            'uf'         => 'required|string|max:255',
            'telefone'      => 'required|string|max:255',
            'documento'  => 'required|file|max:1024|mimetypes:application/pdf,image/jpeg,image/png',
        ], [
            'name.required'       => 'Nome é obrigatório!',
            'rg.required'         => 'RG é obrigatório!',
            'cpf.required'        => 'CPF é obrigatório!',
            'email.required'      => 'E-mail é obrigatório!',
            'cep.required'        => 'CEP é obrigatório!',
            'rua_quadra.required' => 'Endereço é obrigatório!',
            'numero.required'     => 'Número é obrigatório!',
            'bairro.required'     => 'Bairro é obrigatório!',
            'cidade.required'     => 'Cidade é obrigatório!',
            'uf.required'         => 'UF é obrigatório!',
            'telefone.required'      => 'Telefone é obrigatório!',
            'documento.required'  => 'Documento é obrigatório!',
            'documento.max'       => 'O documento ultrapassou o limite de 1MB!',
            'documento.mimetypes' => 'Tipo de arquivo inválido!'
        ]);

        $path = $request->file('documento')->store('documentos');

        $data = Arr::set($data, 'documento', $path);

        // return view('test.image', \compact('base64'));

        // salvar o documento

        $submission = Submission::create($data);

        return redirect()->to(route('cadastro'))->with('submission-succeeded', true);
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

        return Excel::download(new SubmissionsExport($request->input('start_date'), $request->input('final_date')), 'cadastros-ebw.xlsx');

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

            return view('test.image', \compact(['base64', 'type']));
        } catch (DecryptException $e) {
            return \abort(422);
        }
    }
}
