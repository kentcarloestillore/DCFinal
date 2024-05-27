<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Trip_detail extends Model
{
    use HasFactory;

    protected $fillable = ['port_departed', 'port_arrived', 'date_departed', 'date_arrived'];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
