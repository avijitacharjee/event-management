<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Barlow&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap");

    @media print {

        html,
        body {
            width: 250px;
            height: 285px;
        }

        @page {
            width: 250px;
            height: 285px;
        }
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    html {
        /* height: 285px; */
        width: 900px;
        display: grid;
        font-family: "Barlow", sans-serif;
        /* background: #520a71; */
        color: black;
        font-size: 14px;
        letter-spacing: 0.1em;
        margin: 0 auto;
    }

    .ticket {
        margin: auto;
        display: flex;
        background: white;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }

    .left {
        display: flex;
    }

    .image {
        height: 285px;
        background-image: url({{ asset($ticket->logo) }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.95;
    }

    .admit-one {
        position: absolute;
        color: darkgray;
        height: 285px;
        padding: 0 10px;
        letter-spacing: 0.15em;
        font-size: 12px;
        display: flex;
        text-align: center;
        justify-content: space-around;
        writing-mode: vertical-rl;
        transform: rotate(-180deg);
    }

    .admit-one span:nth-child(2) {
        color: white;
        font-weight: 700;
    }

    .left .ticket-number {
        height: 285px;
        width: 310px;
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        padding: 10px;
        color: white;
    }

    .ticket-info {
        padding: 10px 20px;
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: space-between;
        align-items: center;
    }

    .date {
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        padding: 5px 0;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .date span:first-child {
        text-align: left;
        width: 100px;
    }

    .date span:last-child {
        text-align: right;
        width: 100px;
    }

    .date .nov-10 {
        color: #d62839;
        font-size: 18px;
        width: 150px;
    }

    .show-name {
        font-size: 18px;
        color: #d62839;
        font-weight: 700;
    }

    .show-name h1 {
        font-size: 30px;
        letter-spacing: 0.05em;
        margin-bottom: 6px;
        color: #93229f;
        font-family: "Saira Stencil One", sans-serif;
    }

    .show-name h2 {
        margin-bottom: 2px;
    }

    .time {
        color: #505050;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-weight: 700;
    }

    .time span {
        font-weight: 400;
        color: darkgray;
    }

    .left .time {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .tagline {
        font-style: italic;
        font-weight: 700;
        font-size: 14px;
    }

    .location {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding-top: 8px;
        border-top: 1px solid gray;
        font-weight: 700;
    }

    .location span:first-child {
        text-align: left;
    }

    .location span:last-child {
        text-align: right;
    }

    .location .separator {
        font-size: 20px;
    }

    .right {
        width: 200px;
        border-left: 1px dashed #404040;
    }

    .right .admit-one {
        color: darkgray;
    }

    .right .admit-one span:nth-child(2) {
        color: #505050;
    }

    .right .right-info-container {
        height: 285px;
        padding: 10px 10px 10px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
    }

    .right .show-name h1 {
        font-size: 18px;
        font-family: "Barlow", sans-serif;
    }

    .right .time {
        margin-top: 10px;
    }

    .barcode {
        height: 100px;
    }

    .barcode img {
        height: 100%;
    }

    .right .ticket-number {
        color: #505050;
        font-weight: 700;
    }

    /* Skissor */
    #scissors {
        height: 50px;
        /* image height */
        width: 90%;
        margin: auto auto;
        background-image: url('http://i.stack.imgur.com/cXciH.png');
        background-repeat: no-repeat;
        background-position: right;
        position: relative;
        overflow: hidden;
    }

    #scissors:after {
        content: "";
        position: relative;
        top: 50%;
        display: block;
        border-top: 3px dashed black;
        margin-top: -3px;
    }
</style>
@foreach ($checkout->bookings as $booking)
    <div class="ticket">
        <div class="left">
            <div class="image">
                <p class="admit-one">
                    <span>Evento</span>
                    <span>Evento</span>
                    <span>Evento</span>
                </p>
                <div class="ticket-number">
                    <p>
                        #{{ $booking->id }}
                    </p>
                </div>
            </div>
            <div class="ticket-info">
                <p class="date">
                    <span>{{ $event->date_time->format('l') }}</span>
                    <span class="nov-10">{{ $event->date_time->format('F j') }}</span>
                    <span>{{ $event->date_time->format('Y') }}</span>
                </p>
                <div class="show-name">
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="time">
                    <p>{{ $event->date_time->format('h:i A') }} <span>TO</span> TBD</p>
                </div>
                <div class="tagline">
                    <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl={{ $booking->id }}"
                        style="width: 60px;height:60px;" alt="QR code">
                    @if ($booking->image)
                        <img src="{{ url($booking->image) }}" alt="" srcset=""
                            style="width: 50px;height:50px;">
                    @endif

                    {{-- <p>IN THIS LIFE OR THE NEXT</p> --}}
                </div>
                <span style="width: 100%; font=size: 20px;">
                    Name: {{$booking->first_name}} {{$booking->last_name}}
                </span>
                <p class="location">
                    <span>
                        {{ $event->type == 'online' ? 'To be held online' : $event->location }}
                    </span>
                </p>
            </div>
        </div>
        <div class="right">
            <p class="admit-one">
                @for ($i = 0; $i < 3; $i++)
                    <span>Evento</span>
                @endfor
            </p>
            <div class="right-info-container">
                <div class="show-name">
                    <small>{{ str($event->name)->limit(30) }}</small>
                </div>
                <div class="time">
                    <p>{{ $event->date_time->format('j.M.Y') }}</p>
                    <p>{{ $event->date_time->format('h:i A') }}<span>TO</span> TBD</p>
                </div>
                <div class="barcode">

                    <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl={{ $booking->id }}"
                        alt="QR code">
                </div>
                <p class="ticket-number">
                    #{{ $booking->id }}
                </p>
            </div>
        </div>
    </div>
    <div style="height: 30px;"></div>
    {{-- <div id="scissors"></div> --}}
@endforeach
