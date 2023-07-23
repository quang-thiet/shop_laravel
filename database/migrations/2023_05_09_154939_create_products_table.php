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
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->string('image');
            $table->integer('discount');
            $table->string('quantity');
            $table->text('detail');
            $table->tinyInteger('published');
            $table->integer('vote')->default(0);
            $table->string('category_id')->nullable();
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
        Schema::dropIfExists('products');
    }
};
