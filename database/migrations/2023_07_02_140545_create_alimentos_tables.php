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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('alimento');
            $table->boolean('es_estacional')->default(false);
            $table->string('epoca_estacional')->nullable();
            $table->timestamps();
        });

        Schema::create('valores_nutricionales', function (Blueprint $table){
            $table->id();
            $table->foreignId('alimentos_id')->constrained('alimentos');
            $table->string('nutriente');
            $table->double('cantidad_nutriente');
            $table->string('unidad_medida');
            $table->timestamps();
        });

        Schema::create('grupo_alimentos', function (Blueprint $table){
            $table->id();
            $table->string('grupo_alimento');
            $table->timestamps();
        });

        Schema::create('fuente_informacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alimentos_id')->constrained('alimentos');
            $table->string('nombre_fuente');
            $table->timestamps();
        });

        Schema::table('alimentos', function (Blueprint $table) {
            $table->foreignId('grupo_alimentos_id')->constrained('grupo_alimentos')->after('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos_tables');
    }
};
