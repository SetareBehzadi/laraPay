<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id('user_account_id');
            $table->integer('user_account_user_id');
            $table->string('user_account_title',50);
            $table->string('user_account_card_number');
            $table->string('user_account_sheba_number',24);
            $table->string('user_account_number',50);
            $table->tinyInteger('user_account_status')->default(0);

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
        Schema::dropIfExists('user_accounts');
    }
}
