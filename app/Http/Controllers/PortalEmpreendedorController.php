<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\General;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PortalEmpreendedorController extends Controller
{
    public function index(Request $request)
    {
        // if ($request->input('categoria')) {
        //     dd($request->input('categoria'));
        // }
        $posts = Post::query()
            ->tap(function (Builder $q) use ($request) {
                if (!is_null($request->input('categoria')) && $request->input('categoria') !== 'todas') {
                    $category = Category::where('category_slug', $request->input('categoria'))->first();
                    $q->whereBelongsTo($category);
                }
            })
            ->simplePaginate(9);

        $categories = Category::all();

        $categoria = $request->input('categoria');

        return view('site.portal-empreendedor', compact(['posts', 'categories', 'categoria']));
    }

    public function show($id)
    {
        $post = Post::with('category')->findOrFail($id);

        return view('site.single', \compact('post'));
    }
}
