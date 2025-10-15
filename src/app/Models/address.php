<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = ['line','line1','postal_code','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
