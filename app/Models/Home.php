<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'banner_text_highlight',
        'banner_text_small',
        'digital_title_highlight',
        'digital_description',
        'digital_items'
    ];

    protected $casts = [
        'digital_items' => AsArrayObject::class,
    ];
}
