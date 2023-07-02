<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patologia_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'patologia_id',
        'user_id',
    ];
}
