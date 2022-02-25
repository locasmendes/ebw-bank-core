<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string( 'banner' )->nullable();
            $table->string( 'banner_text_highlight' )->nullable();
            $table->string( 'banner_text_small' )->nullable();
            $table->string( 'digital_title_highlight' )->nullable();
            $table->string( 'digital_description' )->nullable();
            $table->json( 'digital_items' )->nullable();
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
        Schema::dropIfExists('homes');
    }
}
