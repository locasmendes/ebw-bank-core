<?php

namespace App\Http\Controllers;

use App\Exports\PreRegistrationsExport;
use App\Models\PreRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class PreRegistrationController extends Controller
{
    public function index()
    {
        return view('site.pre-registration');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'person-type' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'cpf-cnpj' => 'required',
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

        PreRegistration::create($data);

        return \redirect()->back()->with('success', true);
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'date|nullable',
            'final_date' => 'date|nullable',
        ]);

        $preRegistration = PreRegistration::query()
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

        if (!$preRegistration) {
            return redirect()->back()->with('invalid-date', true);
        }

        $filaname = function () use ($request) {
            $filename = 'pre-cadastros-ebw';

            if (!is_null($request->input('start_date'))) {
                $filename .= '-de-' . Carbon::createFromDate($request->input('start_date'))->format('d_m_Y');
            }
            if (!is_null($request->input('final_date'))) {
                $filename .= '-ate-' . Carbon::createFromDate($request->input('final_date'))->format('d_m_Y');
            }
            return $filename . '.xlsx';
        };

        return Excel::download(new PreRegistrationsExport($request->input('start_date'), $request->input('final_date')), $filaname());

        return redirect()->back();
    }
}
