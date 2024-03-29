<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrice extends Model
{
    use HasFactory;
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    protected $casts = [
        'from_age' => 'integer',
        'to_age' => 'integer'
    ];
}
