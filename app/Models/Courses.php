<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'course_title',
        'course_description',
        'categories'
    ];

    protected $casts = [
        'categories' => 'array',
    ];
}
