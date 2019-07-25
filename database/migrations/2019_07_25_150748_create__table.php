<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('commander');
            $table->string('partner');
            $table->string('format');
            $table->text('list');
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
        Schema::drop('');
    }
}
