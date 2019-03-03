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
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('size')->nullable();
            $table->string('memory')->nullable();
            $table->string('weights')->nullable();
            $table->string('color')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('screen')->nullable();
            $table->string('battery')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('camera_primary')->nullable();
            $table->string('camera_secondary')->nullable();
            $table->integer('promotion_price')->unsigned();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->integer('quantity')->unsigned();
            $table->string('description')->nullable();
            $table->integer('price')->unsigned();
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
