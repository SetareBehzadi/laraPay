<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_transactions', function (Blueprint $table) {
            $table->id('bank_transaction_id');
            $table->integer('bank_transaction_bank_id');
            $table->integer('bank_transaction_gateway_transaction_id');
            $table->string('bank_transaction_res_number');
            $table->string('bank_transaction_ref_number');
            $table->integer('bank_transaction_amount');
            $table->string('bank_transaction_card_number', 20)->nullable();
            $table->text('bank_transaction_details')->nullable();
            $table->tinyInteger('bank_transaction_status');

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
        Schema::dropIfExists('bank_transactions');
    }
}
