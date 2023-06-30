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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_usuario');
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('dias_adelantamiento', function(Blueprint $table){
            $table->id();
            $table->string('dias');
            $table->timestamps();
        });

        Schema::create('dias_adelantamiento_user', function(Blueprint $table){
            $table->id();
            $table->foreignId('dias_adelantamiento_id')->constrained('dias_adelantamiento');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('horas_adelantamiento', function(Blueprint $table){
            $table->id();
            $table->string('horas');
            $table->timestamps();
        });

        Schema::create('horas_adelantamiento_user', function(Blueprint $table){
            $table->id();
            $table->foreignId('horas_adelantamiento_id')->constrained('horas_adelantamiento');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('objetivo_salud', function(Blueprint $table) {
            $table->id();
            $table->string('objetivos_salud');
            $table->timestamps();
        });

        Schema::create('objetivo_salud_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('objetivo_salud_id')->constrained('objetivo_salud', 'id');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('estilo_vida', function(Blueprint $table){
            $table->id();
            $table->string('estilos_vida');
            $table->timestamps();
        });

        Schema::create('estilo_vida_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('estilo_vida_id')->constrained('estilo_vida');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('patologia', function(Blueprint $table){
            $table->id();
            $table->string('patologias');
            $table->timestamps();
        });

        Schema::create('patologia_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('patologia_id')->constrained('patologia');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('cirugia', function(Blueprint $table){
            $table->id();
            $table->string('cirugias');
            $table->timestamps();
        });

        Schema::create('cirugia_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('cirugia_id')->constrained('cirugia');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('anamnesis_alimentaria', function(Blueprint $table){
            $table->id();
            $table->string('gustos');
            $table->string('alimentos_rechazados');
            $table->timestamps();
        });

        Schema::create('anamnesis_alimentaria_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('anamnesis_alimentaria_id')->constrained('anamnesis_alimentaria');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('alergia', function(Blueprint $table){
            $table->id();
            $table->string('alergias');
            $table->timestamps();
        });

        Schema::create('alergia_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('alergia_id')->constrained('alergia');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('intolerancia', function(Blueprint $table){
            $table->id();
            $table->string('intolerancias');
            $table->timestamps();
        });

        Schema::create('intolerancia_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('intolerancia_id')->constrained('intolerancia');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('analisis_clinico', function(Blueprint $table){
            $table->id();
            $table->string('analisis_clinicos');
            $table->double('valor');
            $table->timestamps();
        });

        Schema::create('analisis_clinico_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('analisis_clinico_id')->constrained('analisis_clinico');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        Schema::create('historia_clinica', function(Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->boolean('sexo');
            $table->foreignId('dias_adelantamiento_user_id')->constrained('dias_adelantamiento_user');
            $table->foreignId('horas_adelantamiento_user_id')->constrained('horas_adelantamiento_user');
            $table->double('altura');
            $table->double('peso');
            $table->string('tiempo_cocina');
            $table->integer('cantidad_cocina')->default(1);
            $table->foreignId('objetivo_salud_user_id')->constrained('objetivo_salud_user');
            $table->foreignId('estilo_vida_user_id')->constrained('estilo_vida_user');
            $table->foreignId('patologia_user_id')->constrained('patologia_user');
            $table->foreignId('cirugia_user_id')->constrained('cirugia_user');
            $table->foreignId('anamnesis_alimentaria_user_id')->constrained('anamnesis_alimentaria_user');
            $table->foreignId('alergia_user_id')->constrained('alergia_user');
            $table->foreignId('intolerancia_user_id')->constrained('intolerancia_user');
            $table->foreignId('analisis_clinico_user_id')->constrained('analisis_clinico_user');
            $table->timestamps();
        });

        /*
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('historia_clinica_id')->constrained('historia_clinica');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
