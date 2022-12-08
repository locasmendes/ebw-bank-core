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


        $posts = Post::query()
            ->limit(6)
            ->whereHas('category', function ($q) {
                $q->where('category_slug',  'imprensa');
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('site.home', compact(['posts']));
    }

    public function passedwon()
    {
        return view('site.passed-won');
    }

    public function ebwbank()
    {
        return view('site.ebwbank');
    }

    public function privacidade()
    {
        return view('site.privacidade');
    }

    public function termos()
    {
        return view('site.termos-e-condicoes');
    }

    public function products()
    {
        return view('site.products');
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
