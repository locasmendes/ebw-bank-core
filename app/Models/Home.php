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
        'digital_items',
        'machine_title_highlight',
        'machine_description',
        'machine_text',
        'machine_image',
        'portal_description',
        'portal_link'
    ];

    protected $casts = [
        'digital_items' => AsArrayObject::class,
    ];
}
