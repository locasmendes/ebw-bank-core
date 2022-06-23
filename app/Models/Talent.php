<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    protected $table = 'talents';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'document_cpf',
        'document_rg',
        'state',
        'city',
        'cep',
        'company_1',
        'function_1',
        'company_2',
        'function_2',
        'company_3',
        'function_3',
        'maior_realizacao',
        'exerceu_lideranca',
        'tipo_ambiente',
        'escolaridade',
        'conhecimento_linguas',
        'area_trabalho',
        'curriculo',
        'conhecimento_informatica'
    ];

    protected $casts = [
        'conhecimento_informatica' => 'array'
    ];
}
