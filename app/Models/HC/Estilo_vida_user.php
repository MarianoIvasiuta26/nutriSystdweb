<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estilo_vida_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'estilo_vida_id',
        'user_id',
    ];
}
