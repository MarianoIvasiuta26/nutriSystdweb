<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentes_analizados extends Model
{
    use HasFactory;
    protected $fillable = [
        'analisis_clinicos_id',
        'componente',
    ];
}
