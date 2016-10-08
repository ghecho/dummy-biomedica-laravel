<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipos extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('marca');
            $table->string('modelo');
        });
    }

    public function down()
    {
        Schema::drop('equipos');
    }
}
