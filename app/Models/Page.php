<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

    protected $casts = [
        'content' => AsArrayObject::class
    ];

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('pages');
        });
    }
}
