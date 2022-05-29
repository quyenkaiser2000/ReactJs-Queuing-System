<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_details', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->unsigned();
            $table->string('chucnang_1')->nullable();
            $table->string('chucnang_2')->nullable();
            $table->string('chucnang_3')->nullable();
            $table->string('chucnang_4')->nullable();
            $table->string('chucnang_5')->nullable();
            $table->string('chucnang_6')->nullable();
            $table->string('chucnang_7')->nullable();
            $table->string('chucnang_8')->nullable();
            $table->string('chucnang_9')->nullable();
            $table->string('chucnang_10')->nullable();
            $table->string('chucnang_11')->nullable();
            $table->string('chucnang_12')->nullable();
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
        Schema::dropIfExists('role_details');
    }
}
