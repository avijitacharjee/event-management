<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function eventVenue(){
        return $this->belongsTo(EventVenue::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function durationInH(): Attribute{
        return Attribute::make(
        get: fn($value) => $this->duration/60
        );
    }
    public function location(): Attribute {
        return Attribute::make(
            get: fn($value) => $this->eventVenue->location
        );
    }
    protected $casts = [
        'date_time' => DateTime::class
    ];
}
