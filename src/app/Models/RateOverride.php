<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class RateOverride extends Model
{
    use HasFactory;
    protected $fillable = ['rate_plan_id','date','price'];

    public function ratePlan()
    {
        return $this->belongsTo(RatePlan::class);
    }
}
