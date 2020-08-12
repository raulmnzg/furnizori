<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cnp');
            $table->string('ci_seria');
            $table->string('ci_nr');
            $table->string('eliberat_de');
            $table->string('catre');
            $table->string('consume');
            $table->string('clc');
            $table->string('serie_contor');
            $table->string('categorie_consum');
            $table->string('city');
            $table->string('address');
            $table->string('district');
            $table->string('location');
            $table->integer('id_by_day');
            $table->string('price');
            $table->date('data_informare')->nullable();
            $table->date('data_primire')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
