<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Home;
use App\Models\Menu;
use App\Models\About;
use App\Models\Course;
use App\Models\Category;
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
        $courses = Course::get();
        $categories = Category::get();

        return view( 'site.portal', compact([ 'menu', 'general', 'courses', 'categories' ]) );
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
    //eager loading
    // Category::with('courses')->get();
    // foreach($categories as $category)
         
    //     foreach($category->courses as $course)
    //         $course->name ...

    // public function cadastro() {
    //     return view( 'site.cadastro' );
    // }
}
