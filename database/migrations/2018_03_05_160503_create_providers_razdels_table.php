<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersRazdelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers_razdels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('opis');
            $table->integer('parent_id')->default('0');
            $table->integer('color')->default('0');
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('providers_razdels');
    }
}
