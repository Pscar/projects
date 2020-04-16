<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('pro_name')->nullable();
            $table->string('barcode')->nullable();
            $table->string('contain')->nullable();
            $table->string('status_sale')->nullable();
            $table->integer('saleprice')->nullable();
            $table->integer('stock_ps')->nullable();
            $table->integer('category_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
