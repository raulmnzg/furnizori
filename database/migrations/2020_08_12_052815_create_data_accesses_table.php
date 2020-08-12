<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_accesses', function (Blueprint $table) {
            $table->id();

            $table->string('clc');
            $table->string('start_mandate');
            $table->string('finish_mandate');
            $table->string('status_request');
            $table->string('file');

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
        Schema::dropIfExists('data_accesses');
    }
}
