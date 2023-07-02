<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cirugia_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'cirugia_id',
        'user_id',
    ];
}
