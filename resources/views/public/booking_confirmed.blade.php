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
                        <h1>Ticket</h1>
                    </div>
                    {{-- <embed src="{{ url('event/ticket/1') }}" width="900" height="250" type="application/pdf"> --}}
                    <iframe id="ticket" src="{{ url('event/ticket/1#toolbar=1') }}" style="width:900px; height:250px;"></iframe>
                    <button id="downloadButton">Download ticket</button>
                    {{-- <a href="{{url('event/ticket/download/'.$booking->id)}}">Download ticket</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/pdfobject@2.2.12/pdfobject.min.js"></script>
    <script>
        document.getElementById('downloadButton').onclick = function() {
            // window.frames["ticket"].focus();
            // window.frames["ticket"].print();
            document.getElementById("ticket").contentWindow.print();
        };
    </script>
@endsection
