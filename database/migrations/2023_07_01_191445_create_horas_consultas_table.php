<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_consultas_maniana', function (Blueprint $table) {
            $table->id();
            $table->time('horas_maniana');
            $table->timestamps();
        });

        Schema::create('horas_consultas_tarde', function (Blueprint $table) {
            $table->id();
            $table->time('horas_tarde');
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
        Schema::dropIfExists('horas_consultas');
    }
};
