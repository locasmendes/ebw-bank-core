<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Home;
use App\Models\Menu;
use App\Models\About;
use App\Models\Course;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cookie;

//use App\Models\Purpose;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $home = Home::first();
        $posts = Post::query()
            ->limit(6)
            ->get();

        return view('site.home', compact(['home', 'posts']));
    }

    public function passedwon()
    {
        return view('site.passed-won');
    }



    public function ebwbank()
    {
        $about = About::first();

        return view('site.ebwbank', compact(['about']));
    }

    public function privacidade()
    {
        return view('site.privacidade');
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
