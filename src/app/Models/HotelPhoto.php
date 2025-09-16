<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class HotelPhoto extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id','path','is_main'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
