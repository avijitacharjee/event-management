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
                                        <a href="explore_events">Explore Events</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="online_event_detail_view">Online Event Detail View</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Checkout
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
                <form action="{{ url('event/checkout') }}" method="POST" id="c-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="main-title checkout-title">
                                <h3>Order Confirmation</h3>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="checkout-block">
                                <div class="main-card">
                                    <div class="bp-title">
                                        <h4>Attendee information</h4>
                                    </div>
                                    @for ($i = 0; $i < request()->num_of_tickets; $i++)
                                        <div class="bp-content bp-form">
                                            <div class="row">
                                                <h3 class="m-1">
                                                    Person {{ $i + 1 }}
                                                </h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">First Name*</label>
                                                        <input class="form-control h_50" type="text"
                                                            name="first_name[]" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Last Name*</label>
                                                        <input class="form-control h_50" type="text"
                                                            name="last_name[]" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Email*</label>
                                                        <input class="form-control h_50" type="text" name="email[]" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Address*</label>
                                                        <input class="form-control h_50" type="text" name="address[]" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group main-form mt-4">
                                                        <label class="form-label">Country*</label>
                                                        <select class="selectpicker" data-size="5" title="Nothing selected"
                                                            name="country[]" data-live-search="true">
                                                            <x-utils.country-select-options />
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">State/Division*</label>
                                                        <input class="form-control h_50" type="text" name="state[]"
                                                            value="Chattogram" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">City/Suburb*</label>
                                                        <input class="form-control h_50" type="text" name="city[]"
                                                            value="Chattogram" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Zip/Post Code*</label>
                                                        <input class="form-control h_50" type="text" name="zip_code[]"
                                                            value="4000" />
                                                    </div>
                                                </div>
                                                @if ($event->ticket->image_required)
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group mt-4">
                                                            <label class="form-label">Image*</label>
                                                            <input type="hidden" id="image_text{{ $i }}"
                                                                name="image_text[]">
                                                            <input class="form-control" type="file" accept="image/*"
                                                                id="image{{ $i }}" name="image[]" required />
                                                        </div>
                                                    </div>
                                                @endif
                                                <input type="hidden" id="price_n{{ $i }}" name="price_id[]"
                                                    value="{{ $event->tickets->first()?->prices->first()?->id }}">
                                                @if ($event->tickets?->first()->prices?->count() > 1)
                                                    <div class="form-group my-3">
                                                        <label for="">Select Age Range</label>
                                                        <select id="age_select{{ $i }}" class="form-control">
                                                            @foreach ($event->tickets->first()?->prices as $price)
                                                                <option value="{{ $loop->index }}">
                                                                    {{ "{$price->from_age}-{$price->to_age}" }}</option>
                                                            @endforeach
                                                        </select>
                                                        <small>Price may very on age</small>
                                                    </div>
                                                @endif
                                                @foreach ($event->tickets as $ticket)
                                                    {{-- @foreach ($ticket->prices as $price) --}}
                                                    <div class="select-ticket-action">
                                                        <div class="ticket-price">
                                                            Price : $<span
                                                                id="price{{ $i }}">{{ $ticket->prices->first()?->price }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="main-card mt-5">
                                    <div class="bp-title">
                                        <h4>
                                            Total Payable Amount : $<span
                                                id="total">{{ $ticketPrice->price * request()->num_of_tickets }}</span>
                                        </h4>
                                    </div>
                                    <div class="bp-content bp-form">
                                        <div class="row">
                                            {{-- <div class="col-lg-12 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Card number*</label>
                                                    <input class="form-control h_50" type="text" name="card_number" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Expiry date*</label>
                                                    <input class="form-control h_50" type="text" placeholder="MM/YY"
                                                        name="card_expiry" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">CVV*</label>
                                                    <input class="form-control h_50" type="text" name="card_cvv" />
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12 col-md-12">
                                                <button class="btn btn-hover h_50 w-100 mt-5 btn-lg btn-block"
                                                    id="sslczPayBtn" token="if you have any token validation"
                                                    postdata="your javascript arrays or objects which requires in backend"
                                                    order="If you already have the transaction generated for current order"
                                                    endpoint="{{ url('/pay-via-ajax') }}">
                                                    Confirm & Pay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 d-none" id="billing_info">
                            <div class="main-card order-summary">
                                <div class="bp-title">
                                    <h4>Billing information</h4>
                                </div>
                                <div class="order-summary-content p_30">
                                    <div class="event-order-dt">
                                        <div class="event-thumbnail-img">
                                            <img src="{{ asset($event->image) }}" alt="" />
                                        </div>
                                        <div class="event-order-dt-content">
                                            <h5>
                                                {{ $event->name }}
                                            </h5>
                                            <span> {{ $event->date_time->format('l F jS Y \a\t h:ia') }} </span>
                                            <div class="category-type">
                                                {{ $event->type }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-total-block">
                                        <div class="order-total-dt">
                                            <div class="order-text">
                                                Total Ticket
                                            </div>
                                            <div class="order-number">1</div>
                                        </div>
                                        <div class="order-total-dt">
                                            <div class="order-text">
                                                Sub Total
                                            </div>
                                            <div class="order-number">
                                                ${{ $ticketPrice->price }}
                                            </div>
                                        </div>
                                        <div class="divider-line"></div>
                                        <div class="order-total-dt">
                                            <div class="order-text">Total</div>
                                            <div class="order-number ttl-clr">
                                                AUD ${{ $ticketPrice->price }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="coupon-code-block">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Coupon Code*</label>
                                        <div class="position-relative">
                                            <input class="form-control h_50" type="text" placeholder="Code"
                                                value="" />
                                            <button class="apply-btn btn-hover" type="button">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div> --}}
                                    <div class="confirmation-btn">
                                        <button type="submit" class="main-btn btn-hover h_50 w-100 mt-5">
                                            Confirm & Pay
                                        </button>
                                        <span>Price is inclusive of all
                                            applicable GST</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function calculateTotal() {
            let num = @json(request()->num_of_tickets);
            let prices = @json($prices);
            let sum = 0;
            for (let i = 0; i < num; i++) {
                sum = sum + parseFloat(prices[$('#age_select' + i).val()].price)
            }
            $('#total').html(sum);

        }
        @if ($event->tickets?->first()->prices?->count() > 1)
            calculateTotal();
        @endif
        var toBase64 = function(file, callBack) {
            file = file.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                callBack(file, reader.result);
            };
            reader.onerror = function(error) {
                console.log('Error: ', error);
            };
        };
        @for ($i = 0; $i < request()->num_of_tickets; $i++)
            @if ($event->tickets?->first()->prices?->count() > 1)
                let prices = @json($prices);
                $('#age_select{{ $i }}').change(function() {
                    $('#price{{ $i }}').html(prices[$('#age_select{{ $i }}').val()].price);
                    $('#price_n{{ $i }}').val(prices[$('#age_select{{ $i }}').val()].id);
                    calculateTotal();
                });
            @endif
            $('#image{{ $i }}').on('change', function() {
                toBase64(this, function(file, base64) {
                    $('#image_text{{$i}}').val(base64);
                });
            });
        @endfor

        var obj = {};

        // Function start
        $.fn.getFormObject = function() {
            var object = $(this).serializeArray().reduce(function(obj, item) {
                var name = item.name.replace("[]", "");
                if (typeof obj[name] !== "undefined") {
                    if (!Array.isArray(obj[name])) {
                        obj[name] = [obj[name], item.value];
                    } else {
                        obj[name].push(item.value);
                    }
                } else {
                    obj[name] = item.value;
                }
                return obj;
            }, {});
            return object;
        }
        $('#sslczPayBtn').click(function() {
            // obj.first_name = '';
            // obj.cus_phone = $('#mobile').val();
            // obj.cus_email = $('#email').val();
            // obj.cus_addr1 = $('#address').val();
            obj = $('#c-form').getFormObject();
            //obj = $('#c-form').serializeArray();
            obj.amount = parseFloat($('#total').html());
            $('#sslczPayBtn').prop('postdata', obj);
            console.log(obj);
        });

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endsection
