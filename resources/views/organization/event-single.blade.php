@extends('organization.layout')
@section('content')
    <div class="wrapper wrapper-body">
        <div class="row">
            <div class="col-md-12">
                <div class="d-main-title">
                    <h3>
                        <i class="fa-solid fa-calendar-days me-3"></i>Single Event
                    </h3>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-top-dts">
                            <div class="event-top-date">
                                <span class="event-month">{{ date('M', strtotime($event->date_time)) }}</span>
                                <span class="event-date">{{ $event->date_time->format('j') }}</span>
                            </div>
                            <div class="event-top-dt">
                                <h3 class="event-main-title">
                                    {{ $event->name }} Showcase
                                    {{ str_replace(':00', '', $event->date_time->format('l F jS Y \a\t h:ia')) }}
                                </h3>
                                <div class="event-top-info-status">
                                    <span class="event-type-name"><i
                                            class="fa-solid fa-location-dot"></i>{{ ucfirst($event->event_type) }}
                                        Event</span>
                                    <span class="event-type-name details-hr">Starts on
                                        <span
                                            class="ev-event-date">{{ $event->date_time->format('D, M j, Y h:ia') }}</span></span>
                                    <span class="event-type-name details-hr">{{ $event->duration_in_h }}h</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="main-event-dt">
                            <div class="event-img">
                                <img src="{{ asset($event->image) }}" alt="" />
                            </div>
                            <div class="share-save-btns dropdown">
                                <button class="sv-btn me-2 btn btn-disablen" disabled>
                                    <i class="fa-regular fa-bookmark me-2"></i>Save
                                </button>
                                <button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-share-nodes me-2"></i>Share
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-facebook me-3"></i>Facebook</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-twitter me-3"></i>Twitter</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-envelope me-3"></i>Email</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-event-content">
                                <h4>About This Event</h4>
                                <p>
                                    {!! $event->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card event-right-dt">
                            <div class="bp-title">
                                <h4>Event Details</h4>
                            </div>
                            <div class="time-left">
                                <div class="countdown">
                                    <div class="countdown-item">
                                        <span id="day"></span>days
                                    </div>
                                    <div class="countdown-item">
                                        <span id="hour"></span>Hours
                                    </div>
                                    <div class="countdown-item">
                                        <span id="minute"></span>Minutes
                                    </div>
                                    <div class="countdown-item">
                                        <span id="second"></span>Seconds
                                    </div>
                                </div>
                            </div>
                            <div class="event-dt-right-group mt-5">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Organised by</h4>
                                    <h5>{{ $event->user->name }}</h5>
                                    {{-- <a href="attendee_profile_view.html">View Profile</a> --}}
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Date and Time</h4>
                                    <h5>Sat, Apr 30, 2022 11:30 AM</h5>
                                    {{-- <div class="add-to-calendar">
                                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-windows me-3"></i>Outlook</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-apple me-3"></i>Apple</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-google me-3"></i>Google</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fa-brands fa-yahoo me-3"></i>Yahoo</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div class="event-dt-right-content">
                                    <h4>Location</h4>
                                    <h5 class="mb-0">
                                        @if ($event->type == 'offline')
                                            {{ $event->location }}
                                        @else
                                            Online
                                        @endif
                                    </h5>
                                    {{-- <a href="#"><i class="fa-solid fa-location-dot me-2"></i>View Map</a> --}}
                                </div>
                            </div>
                            <div class="select-tickets-block">
                                <h6>Buy Ticket</h6>
                                {{-- <div class="select-ticket-action">
                                    <div class="ticket-price">
                                        {{$event->currency}} {{$event->ticket_price}}
                                    </div>
                                    <div class="quantity">
                                        <div class="counter">
                                            <span class="down" onClick="decreaseCount(event, this)">-</span>
                                            <input type="text" value="0" />
                                            <span class="up" onClick="increaseCount(event, this)">+</span>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <p>
                                    2 x pair hand painted leather earrings 1
                                    x glass of bubbles / or coffee
                                    Individual grazing box / fruit cup
                                </p> --}}
                                <div class="xtotel-tickets-count">
                                    <div class="x-title">1x Ticket(s)</div>
                                    <h4>{{ $event->currency }} <span>{{ $event->ticket_price }}</span></h4>
                                </div>
                            </div>
                            <div class="booking-btn">
                                <a href="/event/checkout" class="main-btn btn-hover w-100">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // === Timer === //
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "04/03/",
                // event = dayMonth + yyyy;
                event = <?php echo json_encode($event->date_time->format('m/j/Y')); ?>

            today = mm + "/" + dd + "/" + yyyy;
            if (today > event) {
                event = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(event).getTime(),
                x = setInterval(function() {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("day").innerText = Math.floor(distance / (day)),
                        document.getElementById("hour").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minute").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("second").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "Booking Ends!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
@endsection
