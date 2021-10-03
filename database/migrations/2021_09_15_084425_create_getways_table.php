<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getways', function (Blueprint $table) {
            $table->id('gateway_id');
            $table->tinyInteger('gateway_plan');
            $table->integer('gateway_user_id');
            $table->string('gateway_title', 100);
            $table->string('gateway_website', 50);
            $table->bigInteger('gateway_balance')->default(0);
            $table->string('gateway_access_token', 20);
            $table->smallInteger('gateway_default_bank')->nullable();
            $table->tinyInteger('gateway_status')->default(0);

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
        Schema::dropIfExists('getways');
    }
}
