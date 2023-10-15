<style>
    /*
 *	TICKET
 *	---------------------------------------------
 */

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .ticket-wrap {
        text-align: center;

    }

    .ticket {
        display: inline-block;
        margin: 0 auto;
        border: 2px solid #9facbc;
        font-family: "Variable Bahnschrift", "FF DIN", "Franklin Gothic", "Helvetica Neue", sans-serif;
        font-feature-settings: "kern" 1;
        background: #ffffff;
        width: 105mm;
        background: linear-gradient(90deg, #ffffff 0%, #e6e6e663 100%);
    }

    .ticket__header {
        margin: 0;
        padding: 5mm;
        background: #f4f5f6;
    }

    .ticket__co span,
    .ticket__route span {
        display: block;
    }

    .ticket__co {
        display: inline-block;
        position: relative;
        /* padding-left: 5em; */
        line-height: 1;
        color: #5e7186;
    }

    .ticket__co-icon {
        position: absolute;
        top: 50%;
        margin-top: -2mm;
        left: 0;
        width: 4mm;
        height: auto;
    }

    .ticket__co-name {
        font-size: 2.5mm;
        font-variation-settings: "wght" 500, "wdth" 75;
        letter-spacing: -.01mm;
    }

    .ticket__co-subname {
        font-variation-settings: "wght" 700;
        color: #506072;
    }

    .ticket__body {
        padding: 2mm 1.25mm 1.25mm;
    }

    .ticket__route {
        font-variation-settings: "wght" 300;
        font-size: 6mm;
        line-height: 1.1;
    }

    .ticket__description {
        margin-top: .5mm;
        font-variation-settings: "wght" 350;
        font-size: 4mm;
        color: #506072;
    }

    .ticket__timing {
        display: flex;
        align-items: center;
        margin-top: 1mm;
        padding: 1mm 0;
        border-top: 2px solid #9facbc;
        border-bottom: 2px solid #9facbc;
        text-align: left;
    }

    .ticket__timing p {
        margin: 0 1mm 0 0;
        padding-right: 1mm;
        border-right: 2px solid #9facbc;
        line-height: 1;
    }

    .ticket__timing p:last-child {
        margin: 0;
        padding: 0;
        border-right: 0;
    }

    .ticket__small-label {
        display: block;
        margin-bottom: .5mm;
        font-variation-settings: "wght" 300;
        font-size: 5mm;
        color: #506072;
    }

    .ticket__detail {
        font-variation-settings: "wght" 700;
        font-size: 7mm;
        color: #424f5e;
    }

    .ticket__admit {
        margin-top: 2mm;
        font-size: 4mm;
        font-variation-settings: "wght" 700, "wdth" 85;
        line-height: 1;
        color: #657990;
    }

    .ticket__fine-print {
        margin-top: 1mm;
        font-variation-settings: "wdth" 75;
        color: #666;
    }

    .ticket__barcode {
        margin-top: 1mm;
        width: 299px;
        max-width: 100%;
    }

    @media (min-width: 36em) {
        .ticket-wrap {
            margin-bottom: 4mm;
            text-align: center;
        }

        .ticket {
            margin: 0 auto;
            transform: rotate(0deg);
        }

        .ticket__header {
            margin: 0;
            padding: 2mm;
        }

        .ticket__body {
            padding: 5mm 2mm 2mm;
        }

        .ticket__detail {
            font-size: 7mm;
        }

        .ticket__admit {
            margin-top: 2mm;
        }
    }

    @supports (display: grid) {
        @media (min-width: 72em) {

            .ticket-info,
            .ticket-wrap {
                align-self: center;
            }

            .ticket-wrap {
                order: 2;
                margin-bottom: 0;
            }

            .ticket-info {
                order: 1;
            }
        }
    }
</style>
<div class="row">
    @foreach ($checkout->bookings as $booking)
        <div class="l-col-right ticket-wrap" aria-label="A fake boat ticket demonstrating mixing font weights and widths">
            <div class="ticket" aria-hidden="true">
                <div class="ticket__header">
                    <div class="ticket__co">
                        <img style="margin: auto;" src="{{ asset('asset/barren/images/evento.svg') }}">
                        {{-- <span class="ticket__co-name">Evento</span>
                        <span class="u-upper ticket__co-subname">Event management and ticketing.</span> --}}
                    </div>
                </div>
                <div class="ticket__body">
                    <img src="{{asset($booking->ticketPrice->ticket->event->image)}}" alt="" srcset="" width="100%">
                    <p class="ticket__route">Event: {{$booking->ticketPrice->ticket->event->name}}</p>
                    {{-- <p class="ticket__description">{{str($booking->ticketPrice->ticket->event->description)}}</p> --}}
                    <div class="ticket__timing">
                        <p>
                            <span class="u-upper ticket__small-label">Date</span>
                            <span class="ticket__detail">{{$booking->ticketPrice->ticket->event->date_time->format("M j")}}</span>
                        </p>
                        <p>
                            <span class="u-upper ticket__small-label">From</span>
                            <span class="ticket__detail">{{ $booking->ticketPrice->ticket->event->date_time->format('h:i A') }}</span>
                        </p>
                        <p>
                            <span class="u-upper ticket__small-label">To</span>
                            <span class="ticket__detail">4:00 pm</span>
                        </p>
                    </div>
                    <p class="ticket__fine-print">Ticket name: {{$booking->ticketPrice->ticket->name}}</p>
                    <p class="u-upper ticket__admit">Ticket description: {!!$booking->ticketPrice->ticket->description!!}</p>
                    <img style="height: 20mm;width: 20mm;" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{ $booking->id }}"
                        alt="QR code">
                </div>
            </div>
        </div>
    @endforeach
</div>
