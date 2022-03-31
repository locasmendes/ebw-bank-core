<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaInternetController extends Controller
{
    public function index()
    {
        return view('site.venda-internet');
    }
}
