<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableCommanders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('commanders', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name', '255')->nullable();
             $table->string('nickname', '255')->nullable();
             $table->string('image', '255')->nullable();
             $table->string('small_image', '255')->nullable();
             $table->integer('attribute1')->nullable();
             $table->integer('attribute2')->nullable();
             $table->integer('attribute3')->nullable();
             $table->integer('skill1')->nullable();
             $table->integer('skill2')->nullable();
             $table->integer('skill3')->nullable();
             $table->integer('skill4')->nullable();
             $table->integer('type_id')->comment('1: Legendary, 2: Epic, 3: Elite, 4: Advanced')->nullable();
             $table->integer('tier_id')->comment('1: S, 2: A, 3: B, 4: C, 5: D')->nullable();
             $table->integer('civilization_id')->nullable();
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
        //
        Schema::dropIfExists('commanders');
    }
}
