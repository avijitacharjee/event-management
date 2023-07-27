<div class="card">
    <div class="row">
        <div class="col-md-2">
            <img src="{{ asset($ticket->logo) }}" style="width: 100px;height:100px;" alt="">
        </div>
        <div class="col-md-4">
            <h1 class="text-dark m-2">{{ $event->name }}</h1>
            <p class="m-2">{{ $event->date_time->format('M j') }}</p>
            <p class="m-2 pt-2">
                <span class="border border-dark p-3 me-3">
                    {{ $event->type == 'offline' ? $event->location : 'Online' }}
                </span>
                <span class="border border-dark p-3">
                    {{ $event->date_time->format('g:i A') }}
                </span>
            </p>
        </div>
        <div class="col-md-4">
            <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=Avijit"
                style="width: 200px;height:200px;" alt="">
            <p>
                ID: {{ $booking->id }}
            </p>
        </div>
        <div class="col-md-2" style="border-left-style: dotted;">
            <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=Avijit"
                style="width: 100px;height:100px;" alt="">
            <p class="ms-3">
                ID: {{ $booking->id }}
            </p>
        </div>
    </div>
</div>
