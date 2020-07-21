<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsToSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->renameColumn('total_beforesale','stock_ps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn('vat');
        });
        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('checking_at');
            $table->dropColumn('paid_at');
            $table->dropColumn('cancelled_at');
            $table->dropColumn('completed_at');
        });
    }
}
