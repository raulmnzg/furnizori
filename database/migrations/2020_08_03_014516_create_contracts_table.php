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
            $table->string('type')->nullable();
            $table->string('email');
            $table->string('phone');

            $table->string('ci_seria');
            $table->string('ci_nr');
            $table->string('cnp');

            $table->string('address');
            $table->string('district');
            $table->string('location');

            $table->string('contract')->nullable();
            $table->string('notificare')->nullable();
            $table->string('request_mandate')->nullable();
            $table->string('standard_application')->nullable();
            $table->string('request_for_conclusion')->nullable();
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
