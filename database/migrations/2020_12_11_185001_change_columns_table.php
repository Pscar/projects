<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->dropColumn('checking_at :');
            $table->dropColumn('paid_at :');
            $table->dropColumn('cancelled_at');
            $table->dropColumn('completed_at');
        });
        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('deteexp_at');
        });
        Schema::table('categorys', function (Blueprint $table) {
            $table->dropColumn('name_subprkun');
            $table->dropColumn('name_howto');
            $table->dropColumn('name_warning');
            $table->dropColumn('name_storage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {
            //
        });
    }
}
