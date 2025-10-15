<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class RatePlan extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id','name','price','is_refundable'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function overrides()
    {
        return $this->hasMany(RateOverride::class);
    }
}
