<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->float('total')->nullable();
            $table->dateTime('checking_at :')->nullable();
            $table->dateTime('paid_at :')->nullable();
            $table->dateTime('cancelled_at')->nullable();
            $table->dateTime('completed_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
