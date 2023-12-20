<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'stage',
        'track',
        'lane_1',
        'lane_2',
        'lane_3',
    ];
}
