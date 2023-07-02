<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnesis_alimentaria extends Model
{
    use HasFactory;
    protected $fillable = [
        'gustos',
        'alimentos_rechazados',
    ];
}
