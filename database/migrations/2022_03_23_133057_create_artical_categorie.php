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
        Schema::create('artical_categorie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('artical_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('artical_user_id');

            $table->unique(['artical_id', 'artical_user_id']);
 
            $table->foreign('artical_id')->references('id')->on('articals')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('artical_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artical_categorie');
    }
};
