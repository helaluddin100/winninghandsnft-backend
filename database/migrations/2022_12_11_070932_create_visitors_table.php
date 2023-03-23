<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('ip')->nullable();
            $table->string('os')->nullable();
            $table->string('os_version')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('country_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('languages')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
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
        Schema::dropIfExists('visitors');
    }
}