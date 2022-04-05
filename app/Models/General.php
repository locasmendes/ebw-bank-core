<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Support\Facades\Cache;

class General extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_phone',
        'contact_email',
        'social_linkedin',
        'social_instagram',
        'social_facebook',
        'social_youtube',
        'social_twitter',
        'maps'
    ];

    protected $casts = [
        'maps' => AsArrayObject::class,
    ];

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('general');
        });
    }
}
