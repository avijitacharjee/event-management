<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTicketByEventId(Event $event)
    {
        return $this->succeededResponse(
            $event->tickets,
            "Successfully retrieved"
        );
    }
}
