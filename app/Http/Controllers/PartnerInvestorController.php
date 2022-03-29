<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerInvestorController extends Controller
{
    public function index()
    {
        return view('site.partner-investor');
    }
}
