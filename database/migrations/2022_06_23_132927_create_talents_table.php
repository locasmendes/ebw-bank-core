<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('document_cpf')->nullable();
            $table->string('document_rg')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('cep')->nullable();
            $table->string('company_1')->nullable();
            $table->string('function_1')->nullable();
            $table->string('company_2')->nullable();
            $table->string('function_2')->nullable();
            $table->string('company_3')->nullable();
            $table->string('function_3')->nullable();
            $table->string('maior_realizacao')->nullable();
            $table->string('exerceu_lideranca')->nullable();
            $table->string('tipo_ambiente')->nullable();
            $table->string('escolaridade')->nullable();
            $table->json('conhecimento_informatica');
            $table->string('conhecimento_linguas')->nullable();
            $table->string('area_trabalho')->nullable();
            $table->string('curriculo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talents');
    }
}
