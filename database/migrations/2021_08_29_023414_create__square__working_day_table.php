<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquareWorkingDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_square__working_day', function (Blueprint $table) {
            $table->id();
            $table->foreignId('square_id')->constrained('squares')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('working_day_id')->constrained('working_days')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('_square__working_day');
    }
}
