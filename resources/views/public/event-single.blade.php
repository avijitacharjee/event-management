@extends('public.layout')
@section('content')
    <div class="wrapper">
        <div class="breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        <div class="barren-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="/event/explore-events">Explore Events</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Event Detail View
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-top-dts">
                            <div class="event-top-date">
                                <span class="event-month">{{ date('M', strtotime($event->datetime)) }}</span>
                                <span class="event-date">{{$event->datetime->format('j')}}</span>
                            </div>
                            <div class="event-top-dt">
                                <h3 class="event-main-title">
                                    {{$event->name}} Showcase {{str_replace(":00","",$event->datetime->format('l F jS Y \a\t h:ia'))}}
                                </h3>
                                <div class="event-top-info-status">
                                    <span class="event-type-name"><i class="fa-solid fa-location-dot"></i>{{ucfirst($event->event_type)}} Event</span>
                                    <span class="event-type-name details-hr">Starts on
                                        <span class="ev-event-date">{{$event->datetime->format('D, M j, Y h:ia')}}</span></span>
                                    <span class="event-type-name details-hr">{{$event->duration_in_h}}h</span>
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
                                <button class="sv-btn me-2">
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
                                    <h5>{{$event->user->name}}</h5>
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
                                        {{$event->location}}
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
                                    <h4>{{$event->currency}} <span>{{$event->ticket_price}}</span></h4>
                                </div>
                            </div>
                            <div class="booking-btn">
                                <a href="/event/checkout" class="main-btn btn-hover w-100">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="more-events">
                            <div class="main-title position-relative">
                                <h3>More Events</h3>
                                <a href="explore_events.html" class="view-all-link">Browse All<i
                                        class="fa-solid fa-right-long ms-2"></i></a>
                            </div>
                            <div class="owl-carousel moreEvents-slider owl-theme">
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="venue_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-1.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="venue_event_detail_view.html" class="event-title">A New Way Of
                                                Life</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $100.00*</span>
                                                <span class="remaining"></span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Fri, 3.45 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="online_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-2.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="online_event_detail_view.html" class="event-title">Earrings Workshop
                                                with
                                                Bronwyn David</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $75.00*</span>
                                                <span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>6
                                                    Remaining</span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>30 Apr</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Sat, 11.20 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="venue_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-3.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="venue_event_detail_view.html" class="event-title">Spring Showcase
                                                Saturday
                                                April 30th 2022 at 7pm</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">Free*</span>
                                                <span class="remaining"></span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Sun, 4.30 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="online_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-4.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="online_event_detail_view.html" class="event-title">Shutter Life</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $85.00</span>
                                                <span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7
                                                    Remaining</span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Sun, 5.30 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="venue_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-5.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="venue_event_detail_view.html" class="event-title">Friday Night Dinner
                                                at The
                                                Old Station May 27 2022</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $41.50*</span>
                                                <span class="remaining"></span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>27 May</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Fri, 12.00 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card mt-4">
                                        <div class="event-thumbnail">
                                            <a href="venue_event_detail_view.html" class="thumbnail-img">
                                                <img src="images/event-imgs/img-6.jpg" alt="" />
                                            </a>
                                            <span class="bookmark-icon" title="Bookmark"></span>
                                        </div>
                                        <div class="event-content">
                                            <a href="venue_event_detail_view.html" class="event-title">Step Up Open Mic
                                                Show</a>
                                            <div class="duration-price-remaining">
                                                <span class="duration-price">AUD $200.00*</span>
                                                <span class="remaining"></span>
                                            </div>
                                        </div>
                                        <div class="event-footer">
                                            <div class="event-timing">
                                                <div class="publish-date">
                                                    <span><i class="fa-solid fa-calendar-day me-2"></i>30 Jun</span>
                                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                    <span>Thu, 4.30 PM</span>
                                                </div>
                                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                event = <?php echo json_encode($event->datetime->format('m/j/Y')); ?>

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
