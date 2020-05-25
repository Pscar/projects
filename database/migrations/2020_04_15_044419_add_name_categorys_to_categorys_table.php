<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameCategorysToCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categorys', function (Blueprint $table) {
            $table->string('name_subprkun')->nullable();
            $table->string('name_howto')->nullable();
            $table->string('name_warning')->nullable();
            $table->string('name_storage')->nullable();
        });
        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('dete_enday');
            $table->dropColumn('dete_exp');
        });

        Schema::table('lots', function (Blueprint $table) {
            $table->dateTime('deteexp_at')->nullable();
            $table->string('stock_im')->nullable();
        });

        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('sale_price');
            $table->dropColumn('name');
            $table->dropColumn('staff_id');
            $table->dropColumn('sale_id');
        });

        Schema::table('sales', function (Blueprint $table) {
            $table->string('drug_id')->nullable(); //foreign key
            $table->string('receipt_id')->nullable();//foreign key
            $table->string('amount')->nullable();
            $table->string('total_sale')->nullable();
            $table->string('saleprice_sale')->nullable();
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('amount');
            $table->dropColumn('sale');
            $table->dropColumn('sale_items');
            $table->dropColumn('receipt_id');
            $table->dropColumn('sale_id');
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->string('staff_id')->nullable(); //foreign key
            $table->string('sale_id')->nullable();//foreign key
            $table->string('total_bill')->nullable();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorys', function (Blueprint $table) {
            //
        });
    }
}
