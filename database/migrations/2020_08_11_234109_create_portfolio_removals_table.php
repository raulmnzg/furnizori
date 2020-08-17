<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioRemovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_removals', function (Blueprint $table) {
            $table->id();
            $table->string('request_type');
            $table->string('clc');
            $table->string('name');
            $table->string('city');
            $table->string('street');
            $table->string('date_removed');
            $table->string('dgsr_validation_date');
            $table->string('applicant_supplier');
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
        Schema::dropIfExists('portfolio_removals');
    }
}
