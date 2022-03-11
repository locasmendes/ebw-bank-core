<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
    ];

    protected $casts = [
        'menu' => AsArrayObject::class,
    ];
}
