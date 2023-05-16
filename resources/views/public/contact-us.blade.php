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
                                        <a href="{{ url('index.html') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Contact Us
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
                        <div class="main-title checkout-title text-center">
                            <h3>Contact Us</h3>
                            <p class="mb-0">
                                Have any questions? We'd love to hear from
                                you.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="main-card mt-5">
                            <div class="row">
                                <div class="col-xl-7 col-lg-12 col-md-12 order-lg-2">
                                    <div class="contact-form bp-form p-lg-5 ps-lg-4 pt-lg-4 pb-5 p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">First Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder=""
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Last Name*</label>
                                                    <input class="form-control h_50" type="text" placeholder=""
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Email*</label>
                                                    <input class="form-control h_50" type="Email" placeholder=""
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Phone*</label>
                                                    <input class="form-control h_50" type="text" placeholder=""
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Message*</label>
                                                    <textarea class="form-textarea" placeholder="About"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text-center mt-4">
                                                    <button class="main-btn btn-hover h_50 w-100" type="submit">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
                                    <div class="contact-banner-block">
                                        <div class="contact-hero-banner">
                                            <div class="contact-hero-banner-info">
                                                <h3>Contact information</h3>
                                                <p>
                                                    Fill out the form and
                                                    our team will get back
                                                    to you soon.
                                                </p>
                                                <ul>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-square-phone fa-beat-fade"
                                                                    style="
                                                                    --fa-beat-fade-opacity: 0.67;
                                                                    --fa-beat-fade-scale: 1.075;
                                                                "></i>
                                                            </div>
                                                            <a href="{{ url('#') }}">+88 018-78362896</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-envelope fa-beat-fade"
                                                                    style="
                                                                    --fa-beat-fade-opacity: 0.67;
                                                                    --fa-beat-fade-scale: 1.075;
                                                                "></i>
                                                            </div>
                                                            <a href="{{ url('#') }}"><span class="__cf_email__"
                                                                    data-cfemail="4c2f2322382d2f380c2e2d3e3e2922622f2321">[email&#160;protected]</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-life-ring fa-beat-fade"
                                                                    style="
                                                                    --fa-beat-fade-opacity: 0.67;
                                                                    --fa-beat-fade-scale: 1.075;
                                                                "></i>
                                                            </div>
                                                            <a href="{{ url('#') }}">Help
                                                                Center</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 d-block d-xl-none">
                        <div class="main-card mt-4">
                            <div class="contact-banner-block">
                                <div class="contact-hero-banner p_30 min-h-auto">
                                    <div class="contact-hero-banner-info">
                                        <h3>Contact information</h3>
                                        <p>
                                            Fill out the form and our team
                                            will get back to you soon.
                                        </p>
                                        <ul>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-square-phone fa-beat-fade"
                                                            style="
                                                            --fa-beat-fade-opacity: 0.67;
                                                            --fa-beat-fade-scale: 1.075;
                                                        "></i>
                                                    </div>
                                                    <a href="{{ url('#') }}">+88 018-78362896</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-envelope fa-beat-fade"
                                                            style="
                                                            --fa-beat-fade-opacity: 0.67;
                                                            --fa-beat-fade-scale: 1.075;
                                                        "></i>
                                                    </div>
                                                    <a href="{{ url('#') }}"><span class="__cf_email__"
                                                            data-cfemail="0f6c60617b6e6c7b4f6d6e7d7d6a61216c6062">[email&#160;protected]</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-life-ring fa-beat-fade"
                                                            style="
                                                            --fa-beat-fade-opacity: 0.67;
                                                            --fa-beat-fade-scale: 1.075;
                                                        "></i>
                                                    </div>
                                                    <a href="{{ url('#') }}">Help Center</a>
                                                </div>
                                            </li>
                                        </ul>
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
