<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Home;
use App\Models\Menu;
use App\Models\About;
//use App\Models\Purpose;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::first();
        $general = General::first();
        $home = Home::first();
        //$purpose = Purpose::get();

        return view( 'site.home', compact([ 'menu', 'general', 'home' ]) );
        //return view( 'site.home', compact([ 'home', 'general', 'purpose' ]) );
    }

    public function portal() {
        $menu = Menu::first();
        $general = General::get();
        
        return view( 'site.portal', compact([ 'menu', 'general' ]) );
    }

    public function single() {
        $menu = Menu::first();

        return view( 'site.single', compact([ 'menu' ]) );
    }

    public function ebwbank() {
        $menu = Menu::first();
        $about = About:: first();

        return view( 'site.ebwbank', compact([ 'menu', 'about' ]) );
    }

    // public function cadastro() {
    //     return view( 'site.cadastro' );
    // }
}
