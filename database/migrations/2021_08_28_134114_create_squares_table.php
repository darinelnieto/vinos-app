<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squares', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('time');
            $table->integer('fifty');
            $table->integer('oneHundred');
            $table->integer('twoHundred');
            $table->integer('fiveHundred');
            $table->integer('thousandCoins');
            $table->integer('thousand');
            $table->integer('twoThousand');
            $table->integer('fiveThousand');
            $table->integer('tenThousand');
            $table->integer('twentyThousand');
            $table->integer('fiftyThousand');
            $table->integer('hundredThousand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('squares');
    }
}
