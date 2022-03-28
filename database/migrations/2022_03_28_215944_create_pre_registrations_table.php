<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('person_type', 10);
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('cpf_cnpj');
            $table->boolean('allow_infomation_whatsapp_sms');
            $table->boolean('allow_infomation_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_registrations');
    }
}
