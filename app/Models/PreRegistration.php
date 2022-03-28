<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_type',
        'name',
        'phone',
        'email',
        'cpf_cnpj',
        'allow_infomation_whatsapp_sms',
        'allow_infomation_email'
    ];
}
