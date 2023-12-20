<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'racer_name',
        'team_id',
    ];
}
