<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetwayReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getway_reports', function (Blueprint $table) {
            $table->id('gateway_report_id');
            $table->integer('gateway_report_gateway_id');
            $table->date('gateway_report_date');
            $table->integer('gateway_report_deposit')->default(0);
            $table->integer('gateway_report_withdrawal')->default(0);
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
        Schema::dropIfExists('getway_reports');
    }
}
