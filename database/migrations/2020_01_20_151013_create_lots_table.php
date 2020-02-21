<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('dete_exp')->nullable();
            $table->dateTime('dete_enday')->nullable();
            $table->integer('drug_id')->unsigned();
            $table->integer('cost')->nullable();
            $table->integer('lot_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lots');
    }
}
