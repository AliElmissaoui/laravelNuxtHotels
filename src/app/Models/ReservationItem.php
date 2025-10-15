<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ReservationItem extends Model
{
    use HasFactory;
    protected $fillable = ['reservation_id','room_id','rate_plan_id','guests','price'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function ratePlan()
    {
        return $this->belongsTo(RatePlan::class);
    }
}
