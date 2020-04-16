<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeteilToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('drug_id');
        });

        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('receipt_id');
        });

        Schema::table('categorys', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });

        Schema::table('informations', function (Blueprint $table) {
            $table->dropColumn('staff_id');
        });

        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('lot_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
