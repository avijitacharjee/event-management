@if ($event->tickets->count())
    <input type="hidden" id="price_n" name="price_id" value="{{ $event->tickets[0]?->prices[0]?->id }}">
    @if ($event->tickets[0]->prices?->count() > 1)
        <div class="form-group my-3">
            <label for="">Select Age Range</label>
            <select id="age_select" class="form-control">
                @foreach ($event->tickets[0]?->prices as $price)
                    <option value="{{ $loop->index }}">
                        {{ "{$price->from_age}-{$price->to_age}" }}</option>
                @endforeach
            </select>
            <small>Price may very on age</small>
        </div>
    @endif
    @foreach ($event->tickets as $ticket)
        {{-- @foreach ($ticket->prices as $price) --}}
        <div class="select-ticket-action">
            <div class="ticket-price">
                Price : $<span id="price">{{ $ticket->prices[0]?->price }}</span>
            </div>
            {{-- <div class="quantity">
                <div class="counter">
                    <span class="down" onClick="decreaseCount(event, this)">-</span>
                    <input type="text" value="0" />
                    <span class="up" onClick="increaseCount(event, this)">+</span>
                </div>
            </div> --}}
        </div>

        <p>
            {!! $ticket->description !!}
        </p>
        <p>
            {{-- {{ "For age from {$price->from_age} to {$price->to_age}" }} --}}
        </p>
        {{-- @endforeach --}}
    @endforeach
@else
    <p>
        Tickets are not yet available for this event.
    </p>
@endif
