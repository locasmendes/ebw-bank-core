<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string( 'telefone' )->nullable();
            $table->string( 'email' )->nullable();
            $table->string( 'linkedin' )->nullable();
            $table->string( 'instagram' )->nullable();
            $table->string( 'facebook' )->nullable();
            $table->json( 'mapas' )->nullable();
            $table->json( 'menu_footer_product' )->nullable();
            $table->json( 'menu_footer_ebw' )->nullable();
            $table->json( 'menu_footer_support' )->nullable();
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
        Schema::dropIfExists('generals');
    }
}
