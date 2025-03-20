<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightClass extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'flight_id',
        'class_type',
        'price',
        'total_seats'
    ];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }

    public function facility() {
        return $this->belongsToMany(Facility::class, 'flight_class_facility', 'flight_class_id', 'facility_id');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
