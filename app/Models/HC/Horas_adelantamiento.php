<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas_adelantamiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'horas',
    ];
}
