<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Home;
use App\Models\Menu;
//use App\Models\Purpose;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $home = Home::first();
        $general = General::first();
        $menu = Menu::first();
        //$purpose = Purpose::get();

        return view( 'site.home', compact([ 'menu', 'general', 'home' ]) );
        //return view( 'site.home', compact([ 'home', 'general', 'purpose' ]) );
    }

    public function portal() {
        $general = General::get();
        
        return view( 'site.portal', compact([ 'general' ]) );
    }

    // public function single() {
    //     return view( 'site.single' );
    // }

    // public function ebwbank() {
    //     return view( 'site.ebwbank' );
    // }

    // public function cadastro() {
    //     return view( 'site.cadastro' );
    // }
}
