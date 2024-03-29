<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function prices()
    {
        return $this->hasMany(TicketPrice::class);
    }
    public function coupons(){
        return $this->hasMany(TicketCoupon::class);
    }
}
