<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquareUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('square_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('square_id')->constrained('squares')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')
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
        Schema::dropIfExists('square_user');
    }
}
