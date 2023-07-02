<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas_consultas_tarde extends Model
{
    use HasFactory;
    protected $fillable = [
        'horas_tarde',
    ];
}
