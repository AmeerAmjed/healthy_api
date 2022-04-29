<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            $table->longText('command');
            $table->timestamps();

            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('question_user_id');

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('question_user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commands');
    }
};
