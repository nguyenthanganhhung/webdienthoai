<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('products', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->integer('quantity')->unsigned();
            $table->string('description');
            $table->integer('price')->unsigned();
            $table->string('size');
            $table->string('memory');
            $table->string('weights');
            $table->string('color');
            $table->string('cpu');
            $table->string('ram');
            $table->string('screen');
            $table->string('battery');
            $table->string('bluetooth');
            $table->string('camera_primary');
            $table->string('camera_secondary');
            $table->integer('promotion_price')->unsigned();
            $table->string('image');
            $table->string('status');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
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
}
