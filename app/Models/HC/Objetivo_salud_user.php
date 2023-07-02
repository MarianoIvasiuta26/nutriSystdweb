<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivo_salud_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'objetivo_salud_id',
        'user_id',
    ];
}
