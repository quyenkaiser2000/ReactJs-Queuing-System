<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberlevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numberlevels', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id')->unsigned();
            $table->string('name');
            $table->string('stt');
            $table->string('phone');
            $table->string('email');
            $table->datetime('start_day');
            $table->datetime('end_day');
            $table->integer('nguoncap');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('numberlevels');
    }
}
