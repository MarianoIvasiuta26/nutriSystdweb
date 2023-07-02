<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnesis_alimentaria_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'gustos',
        'alimentos_rechazados',
    ];
}
