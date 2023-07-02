<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnesis_alimentaria_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'anamnesis_alimentaria_id',
        'user_id',
    ];
}
