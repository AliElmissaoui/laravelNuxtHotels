<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Hotel extends Model
{
     use HasFactory;
    protected $fillable = ['name','description','address_id','stars'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function hotelPhotos()
    {
        return $this->hasMany(HotelPhoto::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_hotel');
    }

    public function roomTypes()
    {
        return $this->hasMany(RoomType::class);
    }

    public function ratePlans()
    {
        return $this->hasMany(RatePlan::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
