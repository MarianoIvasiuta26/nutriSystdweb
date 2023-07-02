<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'alegia_id',
        'user_id',
    ];
}
