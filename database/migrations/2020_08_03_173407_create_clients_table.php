<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('clc');

            $table->string('name');

            $table->string('street');
            $table->string('number');
            $table->string('street2')->nullable();


            $table->boolean('scada')->default(0);


            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')
                ->references('id')
                ->on('districts');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');

            $table->unsignedBigInteger('consumption_category_id');
            $table->foreign('consumption_category_id')
                ->references('id')
                ->on('consumption_categories');



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
        Schema::dropIfExists('clients');
    }
}
