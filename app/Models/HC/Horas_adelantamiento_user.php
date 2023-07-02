<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas_adelantamiento_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'horas_adelantamiento_id',
        'user_id',
    ];
}
