@extends('organization.layout')
@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3>
                                <i class="fa-solid fa-calendar-days me-3"></i>Events
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">
                                <h5 class="mb-4">Events ({{ count($events) }})</h5>
                                <div class="d-md-flex flex-wrap align-items-center">
                                    <div class="dashboard-date-wrap">
                                        <div class="form-group">
                                            <div class="relative-input position-relative">
                                                <input class="form-control h_40" type="text"
                                                    placeholder="Search by event name, status" value="" />
                                                <i class="uil uil-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs ms-auto mt_r4">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            <button class="tab-link active" data-bs-toggle="tab" data-bs-target="#all-tab"
                                                type="button" role="tab" aria-controls="all-tab" aria-selected="true">
                                                All Event (<span class="total_event_counter">{{ $events->count() }}</span>)
                                            </button>
                                            <button class="tab-link" data-bs-toggle="tab" data-bs-target="#online-tab"
                                                type="button" role="tab" aria-controls="online-tab"
                                                aria-selected="false">
                                                Online Event (<span class="total_event_counter">0</span>)
                                            </button>
                                            <button class="tab-link" data-bs-toggle="tab" data-bs-target="#venue-tab"
                                                type="button" role="tab" aria-controls="venue-tab"
                                                aria-selected="false">
                                                Venue Event (<span class="total_event_counter">0</span>)
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-list">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                    @foreach ($events as $event)
                                        <div class="main-card mt-4">
                                            <div class="contact-list">
                                                <div
                                                    class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                    <div class="d-md-flex align-items-center event-top-info">
                                                        <div class="card-event-img">
                                                            <img src="{{ url($event->image) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="card-event-dt">
                                                            <h5>
                                                                {{$event->name}}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-gear me-3"></i>Manage</a>
                                                            <a href="{{ url('organization/event/'.$event->id) }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-eye me-3"></i>Preview
                                                                Event</a>
                                                            <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                    class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                            <a href="{{ url('#') }}"
                                                                class="dropdown-item delete-event"><i
                                                                    class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                        </span>
                                                        <p>Status</p>
                                                        <h6 class="coupon-status">
                                                            Publish
                                                        </h6>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </span>
                                                        <p>Starts on</p>
                                                        <h6 class="coupon-status">
                                                            {{$event->date_time->format('j M, Y g:i A')}}
                                                        </h6>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-ticket"></i>
                                                        </span>
                                                        <p>Ticket</p>
                                                        <h6 class="coupon-status">
                                                            {{$event->number_of_tickets}}
                                                        </h6>
                                                    </div>
                                                    <div class="icon-box">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-tag"></i>
                                                        </span>
                                                        <p>Tickets sold</p>
                                                        <h6 class="coupon-status">
                                                            n
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="online-tab" role="tabpanel">
                                    {{-- <div class="main-card d-none mt-4">
                                        <div
                                            class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                            <div class="event-list-icon">
                                                <img src="{{ asset('/asset/barren/images/calendar.png') }}"
                                                    alt="" />
                                            </div>
                                            <p class="font-16 mt-4 text-light3">
                                                No Event found
                                            </p>
                                        </div>
                                    </div>
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{ asset('/asset/barren/images/event-imgs/img-2.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>
                                                            Earrings
                                                            Workshop with
                                                            Bronwyn David
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Manage</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-eye me-3"></i>Preview
                                                            Event</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                        <a href="{{ url('#') }}"
                                                            class="dropdown-item delete-event"><i
                                                                class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">
                                                        Publish
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">
                                                        30 Jun, 2022 10:00
                                                        AM
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">
                                                        250
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Tickets sold</p>
                                                    <h6 class="coupon-status">
                                                        20
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{ asset('/asset/barren/images/event-imgs/img-2.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>
                                                            Earrings
                                                            Workshop with
                                                            Bronwyn David
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Manage</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-eye me-3"></i>Preview
                                                            Event</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                        <a href="{{ url('#') }}"
                                                            class="dropdown-item delete-event"><i
                                                                class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">
                                                        Publish
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">
                                                        30 Jun, 2022 10:00
                                                        AM
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">
                                                        250
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Tickets sold</p>
                                                    <h6 class="coupon-status">
                                                        20
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="tab-pane fade" id="venue-tab" role="tabpanel">
                                    {{-- <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div
                                                class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{ asset('/asset/barren/images/event-imgs/img-7.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>
                                                            Tutorial on
                                                            Canvas Painting
                                                            for Beginners
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-gear me-3"></i>Manage</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-eye me-3"></i>Preview
                                                            Event</a>
                                                        <a href="{{ url('#') }}" class="dropdown-item"><i
                                                                class="fa-solid fa-clone me-3"></i>Duplicate</a>
                                                        <a href="{{ url('#') }}"
                                                            class="dropdown-item delete-event"><i
                                                                class="fa-solid fa-trash-can me-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>Status</p>
                                                    <h6 class="coupon-status">
                                                        Publish
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">
                                                        30 Jun, 2022 10:00
                                                        AM
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">
                                                        250
                                                    </h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-tag"></i>
                                                    </span>
                                                    <p>Tickets sold</p>
                                                    <h6 class="coupon-status">
                                                        20
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
