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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->foreignId('user_id')->index();
            $table->integer('product_id');
            $table->integer('price');
            $table->string('image');
            $table->integer('total');
            $table->tinyInteger('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
     
    }
};
