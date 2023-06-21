@extends('public.layout')
@section('css')
    <link href="{{ asset('asset/barren/css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/css/jquery-steps.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/ckeditor5/sample/css/sample.css') }}" rel="stylesheet">
@endsection
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
                                        <a href="{{ url('index.html') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/event/create-new') }}">Create</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Create Online Event
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
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-title text-center">
                            <h3>Create Online Event</h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class="wizard-steps-block">
                            <form action="" method="POST" id="form1">
                                @csrf
                                <div id="add-event-tab" class="step-app">
                                    <ul class="step-steps">
                                        <li class="active">
                                            <a href="{{ url('#tab_step1') }}">
                                                <span class="number"></span>
                                                <span class="step-name">Details</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('#tab_step2') }}">
                                                <span class="number"></span>
                                                <span class="step-name">Tickets</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('#tab_step3') }}">
                                                <span class="number"></span>
                                                <span class="step-name">Setting</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="step-content">
                                        <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                            <div class="tab-from-content">
                                                <div class="main-card">
                                                    <div class="bp-title">
                                                        <h4>
                                                            <i class="fa-solid fa-circle-info step_icon me-3"></i>Details
                                                        </h4>
                                                    </div>
                                                    <div class="p-4 bp-form main-form">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Give
                                                                        your
                                                                        event a
                                                                        name.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">
                                                                        See how
                                                                        your
                                                                        name
                                                                        appears
                                                                        on the
                                                                        event
                                                                        page and
                                                                        a list
                                                                        of all
                                                                        places
                                                                        where
                                                                        your
                                                                        event
                                                                        name
                                                                        will be
                                                                        used.
                                                                        <a href="{{ url('#') }}" class="a-link">Learn
                                                                            more</a>
                                                                    </p>
                                                                    <input class="form-control h_50" type="text"
                                                                        placeholder="Enter event name here"
                                                                        name="event_name" />
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label class="form-label fs-16">Choose
                                                                        a
                                                                        category
                                                                        for your
                                                                        event.*</label>
                                                                    <p class="mt-2 d-block fs-14 mb-3">
                                                                        Choosing
                                                                        relevant
                                                                        categories
                                                                        helps to
                                                                        improve
                                                                        the
                                                                        discoverability
                                                                        of your
                                                                        event.
                                                                        <a href="{{ url('#') }}" class="a-link">Learn
                                                                            more</a>
                                                                    </p>
                                                                    <x-utils.select-event-category/>
                                                                </div>
                                                                <div class="form-group border_bottom pt_30 pb_30">
                                                                    <label class="form-label fs-16">When is
                                                                        your
                                                                        event?*</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">
                                                                        Tell
                                                                        your
                                                                        attendees
                                                                        when
                                                                        your
                                                                        event
                                                                        starts
                                                                        so they
                                                                        can get
                                                                        ready to
                                                                        attend.
                                                                    </p>
                                                                    <div class="row g-2">
                                                                        <div class="col-md-6">
                                                                            <label class="form-label mt-3 fs-6">Event
                                                                                Date.*</label>
                                                                            <div class="loc-group position-relative">
                                                                                <input
                                                                                    class="form-control h_50 datepicker-here"
                                                                                    data-language="en" type="text"
                                                                                    placeholder="MM/DD/YYYY"
                                                                                    name="date" />
                                                                                <span class="absolute-icon"><i
                                                                                        class="fa-solid fa-calendar-days"></i></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <div class="clock-icon">
                                                                                        <label
                                                                                            class="form-label mt-3 fs-6">Time</label>
                                                                                        <x-utils.select-time/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Duration</label>
                                                                                    <select class="selectpicker"
                                                                                        data-size="5" name="duration"
                                                                                        data-live-search="true">
                                                                                        <option value="15">
                                                                                            15m
                                                                                        </option>
                                                                                        <option value="30">
                                                                                            30m
                                                                                        </option>
                                                                                        <option value="45">
                                                                                            45m
                                                                                        </option>
                                                                                        <option value="60"
                                                                                            selected="selected">
                                                                                            1h
                                                                                        </option>
                                                                                        <option value="75">
                                                                                            1h
                                                                                            15m
                                                                                        </option>
                                                                                        <option value="90">
                                                                                            1h
                                                                                            30m
                                                                                        </option>
                                                                                        <option value="105">
                                                                                            1h
                                                                                            45m
                                                                                        </option>
                                                                                        <option value="120">
                                                                                            2h
                                                                                        </option>
                                                                                        <option value="135">
                                                                                            2h
                                                                                            15m
                                                                                        </option>
                                                                                        <option value="150">
                                                                                            2h
                                                                                            30m
                                                                                        </option>
                                                                                        <option value="165">
                                                                                            2h
                                                                                            45m
                                                                                        </option>
                                                                                        <option value="180">
                                                                                            3h
                                                                                        </option>
                                                                                        <option value="195">
                                                                                            3h
                                                                                            15m
                                                                                        </option>
                                                                                        <option value="210">
                                                                                            3h
                                                                                            30m
                                                                                        </option>
                                                                                        <option value="225">
                                                                                            3h
                                                                                            45m
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <x-form-input.event-repeat/>
                                                                </div>
                                                                <div class="form-group pt_30 pb_30">
                                                                    <label class="form-label fs-16">Add a
                                                                        few
                                                                        images
                                                                        to your
                                                                        event
                                                                        banner.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3 pe_right">
                                                                        Upload
                                                                        colorful
                                                                        and
                                                                        vibrant
                                                                        images
                                                                        as the
                                                                        banner
                                                                        for your
                                                                        event!
                                                                        See how
                                                                        beautiful
                                                                        images
                                                                        help
                                                                        your
                                                                        event
                                                                        details
                                                                        page.
                                                                        <a href="{{ url('#') }}"
                                                                            class="a-link">Learn
                                                                            more</a>
                                                                    </p>
                                                                    <div class="content-holder mt-4">
                                                                        <div class="default-event-thumb">
                                                                            <div class="default-event-thumb-btn">
                                                                                <div class="thumb-change-btn">
                                                                                    <input type="file" name="image"
                                                                                        id="thumb-img" />
                                                                                    <label for="thumb-img">Change
                                                                                        Image</label>
                                                                                </div>
                                                                            </div>
                                                                            <img src="{{ asset('/asset/barren/images/banners/custom-img.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group border_bottom pb_30">
                                                                    <label class="form-label fs-16">Please
                                                                        describe
                                                                        your
                                                                        event.</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">
                                                                        Write a
                                                                        few
                                                                        words
                                                                        below to
                                                                        describe
                                                                        your
                                                                        event
                                                                        and
                                                                        provide
                                                                        any
                                                                        extra
                                                                        information
                                                                        such as
                                                                        schedules,
                                                                        itinerary
                                                                        or any
                                                                        special
                                                                        instructions
                                                                        required
                                                                        to
                                                                        attend
                                                                        your
                                                                        event.
                                                                    </p>
                                                                    <div class="text-editor mt-4">
                                                                        <textarea name="description" id="pd_editor"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group pt_30 pb-2">
                                                                    <label class="form-label fs-16">What
                                                                        type of
                                                                        online
                                                                        event
                                                                        are you
                                                                        hosting?*</label>
                                                                    <p class="mt-2 fs-14 d-block mb-3">
                                                                        Choosing
                                                                        the type
                                                                        of your
                                                                        event
                                                                        helps us
                                                                        to
                                                                        create a
                                                                        more
                                                                        tailored
                                                                        experience
                                                                        for you.
                                                                        <a href="{{ url('#') }}"
                                                                            class="a-link">Learn
                                                                            more</a>
                                                                    </p>
                                                                    <div class="stepper-data-set">
                                                                        <div class="content-holder template-selector">
                                                                            <div class="row g-3">
                                                                                <div
                                                                                    class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                    <div class="template-item mt-3">
                                                                                        <input id="standard_webinar"
                                                                                            type="radio"
                                                                                            name="template_id"
                                                                                            value="standard webinar" />
                                                                                        <label class="template sw-template"
                                                                                            for="standard_webinar">
                                                                                            <img src="{{ asset('/asset/barren/images/icons/standard-webinar.png') }}"
                                                                                                alt="" />
                                                                                        </label>
                                                                                        <h6
                                                                                            class="hosting-title fs-14 mt-2 mb-0">
                                                                                            Standard
                                                                                            Webinar
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                    <div class="template-item mt-3">
                                                                                        <input id="traning_workshop"
                                                                                            type="radio"
                                                                                            name="template_id"
                                                                                            value="traning workshop" />
                                                                                        <label class="template tw-template"
                                                                                            for="traning_workshop">
                                                                                            <img src="{{ asset('/asset/barren/images/icons/health-and-welbeing.png') }}"
                                                                                                alt="" />
                                                                                        </label>
                                                                                        <h6
                                                                                            class="hosting-title fs-14 mt-2 mb-0">
                                                                                            Training
                                                                                            and
                                                                                            Workshop
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                    <div class="template-item mt-3">
                                                                                        <input id="online_classes"
                                                                                            type="radio"
                                                                                            name="template_id"
                                                                                            value="online classes" />
                                                                                        <label class="template oc-template"
                                                                                            for="online_classes">
                                                                                            <img src="{{ asset('/asset/barren/images/icons/e-learning.png') }}"
                                                                                                alt="" />
                                                                                        </label>
                                                                                        <h6
                                                                                            class="hosting-title fs-14 mt-2 mb-0">
                                                                                            Online
                                                                                            Classes
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                    <div class="template-item mt-3">
                                                                                        <input id="talk_show"
                                                                                            type="radio"
                                                                                            name="template_id"
                                                                                            value="talk show" />
                                                                                        <label class="template ts-template"
                                                                                            for="talk_show">
                                                                                            <img src="{{ asset('/asset/barren/images/icons/talk-show-1.png') }}"
                                                                                                alt="" />
                                                                                        </label>
                                                                                        <h6
                                                                                            class="hosting-title fs-14 mt-2 mb-0">
                                                                                            Talk
                                                                                            Show
                                                                                        </h6>
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
                                        </div>
                                        {{-- <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                            <div class="tab-from-content">
                                                <div class="main-card">
                                                    <div class="bp-title">
                                                        <h4>
                                                            <i class="fa-solid fa-ticket step_icon me-3"></i>Tickets
                                                        </h4>
                                                    </div>
                                                    <div class="p-4 bp-form main-form">
                                                        <div class="form-group border_bottom pb_30">
                                                            <div class="ticket-section">
                                                                <label class="form-label fs-16">Let's
                                                                    create
                                                                    tickets!</label>
                                                                <p class="mt-2 fs-14 d-block mb-3 pe_right">
                                                                    Add the
                                                                    ticket price
                                                                    and the
                                                                    number of
                                                                    your
                                                                    attendees.
                                                                    For free
                                                                    events, keep
                                                                    the price at
                                                                    $0.
                                                                </p>
                                                                <div class="content-holder">
                                                                    <div class="row g-3">
                                                                        <div class="col-md-6 disabled-action">
                                                                            <label
                                                                                class="form-label mt-3 fs-6">Price*</label>
                                                                            <div
                                                                                class="loc-group position-relative input-group">
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder=""
                                                                                    name="ticket_price" value="10.00" />
                                                                                <div class="pp-select">
                                                                                    <select name="currency"
                                                                                        class="selectpicker dropdown-no-bg">
                                                                                        <option value="BDT"
                                                                                            selected="selected">
                                                                                            BDT
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label class="form-label mt-3 fs-6">Total
                                                                                number
                                                                                of
                                                                                tickets
                                                                                available*</label>
                                                                            <div class="input-number">
                                                                                <input class="form-control h_50"
                                                                                    type="number" placeholder=""
                                                                                    value="5"
                                                                                    name="number_of_tickets" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="free-event pt_30">
                                                                <div class="content-holder">
                                                                    <div class="form-group">
                                                                        <div class="d-flex align-items-start">
                                                                            <label class="btn-switch m-0 me-3">
                                                                                <input type="checkbox" class=""
                                                                                    id="free-event-ticketing"
                                                                                    value="" />
                                                                                <span class="checkbox-slider"></span>
                                                                            </label>
                                                                            <div class="d-flex flex-column">
                                                                                <label
                                                                                    class="color-black fs-14 fw-bold mb-1">Tickets
                                                                                    are
                                                                                    free</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="stepper-data-set pt_30 disabled-action">
                                                            <div class="content-holder">
                                                                <div class="form-group">
                                                                    <div class="d-flex align-items-start">
                                                                        <label class="btn-switch m-0 me-3">
                                                                            <input type="checkbox" class=""
                                                                                id="bird-discount" value="" />
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                        <div class="d-flex flex-column">
                                                                            <label class="color-black mb-1">I
                                                                                want
                                                                                to
                                                                                offer
                                                                                early
                                                                                bird
                                                                                discount.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-3">
                                                                                Enabling
                                                                                this
                                                                                discount
                                                                                lets
                                                                                your
                                                                                attendees
                                                                                get
                                                                                all
                                                                                the
                                                                                regular
                                                                                tickets
                                                                                features
                                                                                at
                                                                                a
                                                                                discounted
                                                                                price.
                                                                                <a href="{{ url('#') }}"
                                                                                    class="a-link">Learn
                                                                                    more</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="online-event-discount-wrapper"
                                                                        style="
                                                                display: none;
                                                            ">
                                                                        <div class="row g-3">
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label mt-3 fs-6">Discount*</label>
                                                                                <input class="form-control h_50"
                                                                                    type="number" placeholder="0"
                                                                                    name="discount" />
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label mt-3 fs-6">Price*</label>
                                                                                <select class="selectpicker" name="discount_type" >
                                                                                    <option value="Percentage"
                                                                                        selected="">
                                                                                        Percent(%)
                                                                                    </option>
                                                                                    <option value="Fixed">
                                                                                        Fixed($)
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label mt-3 fs-6">Discount
                                                                                    ends
                                                                                    on*</label>
                                                                                <div class="loc-group position-relative">
                                                                                    <input
                                                                                        class="form-control h_50 datepicker-here"
                                                                                        data-language="en" type="text"
                                                                                        placeholder="MM/DD/YYYY"
                                                                                        name="discount_end_date" />
                                                                                    <span class="absolute-icon"><i
                                                                                            class="fa-solid fa-calendar-days"></i></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="clock-icon">
                                                                                    <label
                                                                                        class="form-label mt-3 fs-6">Time</label>
                                                                                    <select class="selectpicker"
                                                                                        data-size="5"
                                                                                        name="discound_end_time"
                                                                                        data-live-search="true">
                                                                                        <option value="00:00">
                                                                                            12:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="00:15">
                                                                                            12:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="00:30">
                                                                                            12:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="00:45">
                                                                                            12:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="01:00">
                                                                                            01:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="01:15">
                                                                                            01:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="01:30">
                                                                                            01:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="01:45">
                                                                                            01:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="02:00">
                                                                                            02:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="02:15">
                                                                                            02:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="02:30">
                                                                                            02:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="02:45">
                                                                                            02:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="03:00">
                                                                                            03:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="03:15">
                                                                                            03:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="03:30">
                                                                                            03:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="03:45">
                                                                                            03:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="04:00">
                                                                                            04:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="04:15">
                                                                                            04:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="04:30">
                                                                                            04:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="04:45">
                                                                                            04:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="05:00">
                                                                                            05:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="05:15">
                                                                                            05:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="05:30">
                                                                                            05:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="05:45">
                                                                                            05:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="06:00">
                                                                                            06:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="06:15">
                                                                                            06:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="06:30">
                                                                                            06:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="06:45">
                                                                                            06:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="07:00">
                                                                                            07:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="07:15">
                                                                                            07:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="07:30">
                                                                                            07:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="07:45">
                                                                                            07:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="08:00">
                                                                                            08:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="08:15">
                                                                                            08:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="08:30">
                                                                                            08:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="08:45">
                                                                                            08:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="09:00">
                                                                                            09:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="09:15">
                                                                                            09:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="09:30">
                                                                                            09:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="09:45">
                                                                                            09:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="10:00"
                                                                                            selected="selected">
                                                                                            10:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="10:15">
                                                                                            10:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="10:30">
                                                                                            10:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="10:45">
                                                                                            10:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="11:00">
                                                                                            11:00
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="11:15">
                                                                                            11:15
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="11:30">
                                                                                            11:30
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="11:45">
                                                                                            11:45
                                                                                            AM
                                                                                        </option>
                                                                                        <option value="12:00">
                                                                                            12:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="12:15">
                                                                                            12:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="12:30">
                                                                                            12:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="12:45">
                                                                                            12:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="13:00">
                                                                                            01:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="13:15">
                                                                                            01:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="13:30">
                                                                                            01:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="13:45">
                                                                                            01:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="14:00">
                                                                                            02:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="14:15">
                                                                                            02:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="14:30">
                                                                                            02:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="14:45">
                                                                                            02:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="15:00">
                                                                                            03:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="15:15">
                                                                                            03:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="15:30">
                                                                                            03:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="15:45">
                                                                                            03:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="16:00">
                                                                                            04:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="16:15">
                                                                                            04:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="16:30">
                                                                                            04:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="16:45">
                                                                                            04:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="17:00">
                                                                                            05:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="17:15">
                                                                                            05:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="17:30">
                                                                                            05:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="17:45">
                                                                                            05:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="18:00">
                                                                                            06:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="18:15">
                                                                                            06:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="18:30">
                                                                                            06:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="18:45">
                                                                                            06:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="19:00">
                                                                                            07:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="19:15">
                                                                                            07:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="19:30">
                                                                                            07:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="19:45">
                                                                                            07:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="20:00">
                                                                                            08:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="20:15">
                                                                                            08:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="20:30">
                                                                                            08:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="20:45">
                                                                                            08:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="21:00">
                                                                                            09:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="21:15">
                                                                                            09:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="21:30">
                                                                                            09:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="21:45">
                                                                                            09:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="22:00">
                                                                                            10:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="22:15">
                                                                                            10:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="22:30">
                                                                                            10:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="22:45">
                                                                                            10:45
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="23:00">
                                                                                            11:00
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="23:15">
                                                                                            11:15
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="23:30">
                                                                                            11:30
                                                                                            PM
                                                                                        </option>
                                                                                        <option value="23:45">
                                                                                            11:45
                                                                                            PM
                                                                                        </option>
                                                                                    </select>
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
                                        </div> --}}
                                        <x-sections.tickets-create-tab/>
                                        <x-sections.tickets-online-settings-tab/>
                                    </div>
                                    <div class="step-footer step-tab-pager mt-4">
                                        <button data-direction="prev" class="btn btn-default btn-hover steps_btn">
                                            Previous
                                        </button>
                                        <button data-direction="next" class="btn btn-default btn-hover steps_btn">
                                            Next
                                        </button>
                                        <button type="submit" data-direction="finish"
                                            value="Create"
                                            form="form1"
                                            class="btn btn-default btn-hover steps_btn">
                                        Create</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('asset/barren/vendor/ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ asset('asset/barren/js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('asset/barren/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('asset/barren/js/i18n/datepicker.en.js') }}"></script>
    <script>
        $("#add-event-tab").steps({
            onFinish: function() {
                $('#form1').submit();
            },
        });
    </script>
    <script>
        ClassicEditor.create(document.querySelector("#pd_editor"), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then((editor) => {
                window.editor = editor;
            })
            .catch((err) => {
                console.error(err.stack);
            });
    </script>
@endsection
