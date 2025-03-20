<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightSegment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sequence',
        'flight_id',
        'airport_id',
        'time'
    ];
}
