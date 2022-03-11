<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
        'mvvs',
        'mvv_about_link',
        'button_start_now',
        'button_ask_for_yours',
        'telefone',
        'email',
        'linkedin',
        'instagram',
        'facebook',
        'mapas',
        'menu_footer_product',
        'menu_footer_ebw',
        'menu_footer_support'
    ];

    protected $casts = [
        'mvvs'                => AsArrayObject::class,
        'mapas'               => AsArrayObject::class,
        'menu_footer_product' => AsArrayObject::class,
        'menu_footer_ebw'     => AsArrayObject::class,
        'menu_footer_support' => AsArrayObject::class
    ];
}
