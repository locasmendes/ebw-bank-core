<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SejaInvestidorController extends Controller
{
    public function index()
    {
        return view('site.seja-investidor');
    }
}
