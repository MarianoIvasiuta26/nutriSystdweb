<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia_clinica extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'dias_adelantamiento_user_id',
        'horas_adelantamiento_user_id',
        'altura',
        'peso',
        'tiempo_cocina',
        'cantidad_cocina',
        'objetivo_salud_user_id',
        'estilo_vida_user_id',
        'patologia_user_id',
        'cirugia_user_id',
        'anamnesis_alimentaria_user_id',
        'alergia_user_id',
        'intolerancia_user_id',
        'analisis_clinico_user_id',
    ];
}
