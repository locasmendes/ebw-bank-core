<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerInvestor extends Model
{
    use HasFactory;

    const INVESTMENTS = [
        'Acima de R$ 500 mil' => 501,
        'Entre R$ 500 mil e R$ 300 mil' => 500,
        'Entre R$ 300 mil e R$ 100 mil' => 300,
        'Entre R$ 100 mil e R$ 50 mil' => 100,
        'Entre R$ 50 mil e R$ 20 mil' => 50,
        'Até R$ 20 mil' => 20
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'cpf_cnpj',
        'investment'
    ];
}
