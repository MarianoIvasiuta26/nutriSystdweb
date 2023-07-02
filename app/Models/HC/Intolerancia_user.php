<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intolerancia_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'intolerancia_id',
        'user_id',
    ];
}
