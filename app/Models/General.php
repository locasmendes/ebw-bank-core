<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'mapas'               => AsArrayObject::class,
        'menu_footer_product' => AsArrayObject::class,
        'menu_footer_ebw'     => AsArrayObject::class,
        'menu_footer_support' => AsArrayObject::class
    ];
}
