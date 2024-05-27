<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip_detail;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'trip_id', 'description', 'date', 'weight', 'price'];

    public function trip(){
        return $this->belongsTo(Trip_detail::class);
    }

}
