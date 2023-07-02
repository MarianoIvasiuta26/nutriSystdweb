<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dias_adelantamiento_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'dias_adelantamiento_id',
        'user_id',
    ];
}
