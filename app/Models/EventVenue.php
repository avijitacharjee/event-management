<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventVenue extends Model
{
    use HasFactory;
    public function location(): Attribute{
        return Attribute::make(
            get: fn($value)=>$this->address_line_1.', '.$this->city.', '.$this->state.', '.$this->country
        );
    }
}
