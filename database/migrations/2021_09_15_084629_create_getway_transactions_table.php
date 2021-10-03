<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetwayTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getway_transactions', function (Blueprint $table) {
            $table->id('gateway_transaction_id');
            $table->integer('gateway_transaction_gateway_id');
            $table->integer('gateway_transaction_amount');
            $table->string('gateway_transaction_res_number');
            $table->string('gateway_transaction_ref_number')->nullable();
            $table->string('gateway_transaction_description')->nullable();
            $table->tinyInteger('gateway_transaction_status')->default(0);

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
        Schema::dropIfExists('getway_transactions');
    }
}
