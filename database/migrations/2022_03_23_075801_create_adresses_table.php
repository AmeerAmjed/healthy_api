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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('gov');
            $table->string('city');
            $table->string('street');
            $table->double('lat');
            $table->double('lng');
            $table->timestamps();

            $table->unsignedBigInteger('pharmacies_id');
            $table->unsignedBigInteger('pharmacies_user_id');

            $table->foreign('pharmacies_id')->references('id')->on('pharmacies')->onDelete('cascade');
            $table->foreign('pharmacies_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
};
