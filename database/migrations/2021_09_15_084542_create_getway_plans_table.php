<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetwayPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getway_plans', function (Blueprint $table) {
            $table->id('gateway_plan_id');
            $table->string('gateway_plan_title');
            $table->float('gateway_plan_commission');
            $table->tinyInteger('gateway_plan_withdrawal_rate');
            $table->integer('gateway_plan_withdrawal_max');
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
        Schema::dropIfExists('getway_plans');
    }
}
