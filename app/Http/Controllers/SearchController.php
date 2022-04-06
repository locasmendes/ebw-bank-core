<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    private $pages = [
        'aebw' => [
            'route' => 'conheca-ebw',
            'title' => 'A EBW'
        ],
        'passou-ganhou' => [
            'route' => 'ebwbank',
            'title' => 'Passou Ganhou'
        ],
        'peca-sua-maquininha' => [
            'route' => 'products',
            'title' => 'Peça sua maquininha'
        ],
        'venda-pela-internet' => [
            'route' => 'venda-internet',
            'title' => 'Venda pela internet'
        ],
        'portal-do-empreendedor' => [
            'route' => 'portal',
            'title' => 'Portal do empreendedor'
        ],
        'pre-cadastro' => [
            'route' => 'pre-registration',
            'title' => 'Pré cadastro'
        ],
        'socio-investidor' => [
            'route' => 'partner-investor',
            'title' => 'Sócio Investidor'
        ],
        'seja-um-investidor' => [
            'route' => 'seja-investidor',
            'title' => 'Seja um investidor'
        ],
        'privacidade' => [
            'route' => 'privacidade',
            'title' => 'Política de privacidade'
        ],
    ];

    public function index(Request $request)
    {
        $request->validate([
            's' => 'required|string'
        ]);

        $s = $request->s;

        $pages = $this->getPages($s);

        $posts = Post::search($s)->get();

        $recentPosts = Post::query()
            ->orderBy('id', 'desc')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('site.search', \compact(['pages', 's', 'posts', 'recentPosts']));
        // dd($this->getPages($request->s));
    }

    private function getPages($search)
    {
        return \collect($this->pages)
            ->filter(function ($value, $key) use ($search) {
                $s = Str::of($search)->explode(' ')
                    ->map(function ($value) {
                        return Str::slug($value);
                    })
                    ->toArray();
                return Str::containsAll($key, $s);
            })->map(function ($value) {
                return [
                    'route' => route($value['route']),
                    'title' => $value['title']
                ];
            });
    }
}
