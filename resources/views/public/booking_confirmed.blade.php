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
                                        <a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="explore_events">Events</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="online_event_detail_view">Checkout</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Booking confirmation
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="event-dt-block p-80">
                <div class="container">
                    <div class="row">
                        <h1>Qr code for entry</h1>
                    </div>
                    <div class="row">
                        <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=Avijit"
                            style="width: 200px;height:200px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
