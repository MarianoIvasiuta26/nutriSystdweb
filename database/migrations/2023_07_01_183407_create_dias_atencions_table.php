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
        Schema::create('dias_atencions', function (Blueprint $table){
            $table->id();
            $table->string('dia_semana');
            $table->time('hora_inicio_maniana');
            $table->time('hora_fin_maniana');
            $table->time('hora_inicio_tarde');
            $table->time('hora_fin_tarde');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_atencion');
    }
};
