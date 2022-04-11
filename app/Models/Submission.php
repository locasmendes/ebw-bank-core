<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'cpf_cnpj',
        'allow_infomation_whatsapp_sms',
        'allow_infomation_email'
    ];

    protected $casts = [
        'allow_infomation_whatsapp_sms' => 'boolean',
        'allow_infomation_email' => 'boolean'
    ];
}
