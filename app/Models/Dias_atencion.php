<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dias_atencion extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia_semana',
        'hora_inicio_maniana',
        'hora_fin_maniana',
        'hora_inicio_tarde',
        'hora_fin_tarde',
    ];
}
