<?php

namespace App\Http\Controllers;

use App\Models\PreRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
}
