<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazdelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('razdels', function (Blueprint $table) {
            //
        });

        Schema::create('razdels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('opis')->default('');
            $table->integer('parent_razdel_id')->default('0');
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
        Schema::dropIfExists('razdels');
    }
}
