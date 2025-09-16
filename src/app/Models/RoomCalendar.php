<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class RoomCalendar extends Model
{
    use HasFactory;
    protected $fillable = ['room_id','date','status'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
