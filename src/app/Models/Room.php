<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Room extends Model
{
    use HasFactory;
    protected $fillable = ['room_type_id','number','status'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function photos()
    {
        return $this->hasMany(RoomPhoto::class);
    }

    public function calendars()
    {
        return $this->hasMany(RoomCalendar::class);
    }
}
