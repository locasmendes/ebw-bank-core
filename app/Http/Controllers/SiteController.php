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
        $home = Home::first();

        return view( 'site.home', compact([ 'home' ]) );
    }

    public function passedwon() {
        return view( 'site.passed-won' );
    }

    public function portal() {
        $general = General::first();
        $courses = Course::get();
        $categories = Category::get();

        return view( 'site.portal', compact([ 'general', 'courses', 'categories' ]) );
    }

    public function single() {
        return view( 'site.single' );
    }

    public function ebwbank() {
        $about = About:: first();

        return view( 'site.ebwbank', compact([ 'about' ]) );
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
