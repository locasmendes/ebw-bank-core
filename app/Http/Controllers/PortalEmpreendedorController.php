<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\General;
use App\Models\Post;
use Illuminate\Http\Request;

class PortalEmpreendedorController extends Controller
{
    public function index()
    {

        $general = General::first();
        $courses = Course::get();
        $categories = Category::get();

        return view('site.portal', compact(['general', 'courses', 'categories']));
    }

    public function show($id)
    {
        $post = Post::with('category')->findOrFail($id);

        return view('site.single', \compact('post'));
    }
}
