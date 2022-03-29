<?php

namespace App\Http\Controllers;

use App\Models\PartnerInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartnerInvestorController extends Controller
{
    public function index()
    {
        return view('site.partner-investor');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'cpf-cnpj' => 'required|string',
            'investment' => 'required|string',
        ]);

        $data = collect($validate)->mapWithKeys(function ($item, $key) {
            return [Str::replace('-', '_', $key) => $item];
        })->toArray();

        PartnerInvestor::create($data);

        return \redirect()->back()->with('success', true);
    }
}
