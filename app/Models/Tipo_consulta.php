<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_consulta',
    ];
}
