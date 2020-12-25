<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('size');
            $table->integer('ram')->nullable();
            $table->integer('capacity');
            $table->string('sim');
            $table->string('screen_size');
            $table->string('cpu')->nullable();
            $table->string('gpu')->nullable();
            $table->string('pin');
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
        Schema::dropIfExists('product_detail');
    }
}
