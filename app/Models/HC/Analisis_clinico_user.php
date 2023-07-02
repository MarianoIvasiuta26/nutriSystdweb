<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis_clinico_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'analisis_clinico_id',
        'user_id',
        'componentes_analizados_id',
        'valor',
    ];
}
