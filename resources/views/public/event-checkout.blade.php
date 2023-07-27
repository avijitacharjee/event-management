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
                <form action="{{ url('event/checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <input type="hidden" name="price_id" value="{{ $ticketPrice->id }}">
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
                                        <h4>Billing information</h4>
                                    </div>
                                    <div class="bp-content bp-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">First Name*</label>
                                                    <input class="form-control h_50" type="text" name="firstname" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Last Name*</label>
                                                    <input class="form-control h_50" type="text" name="lastname" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Email*</label>
                                                    <input class="form-control h_50" type="text" name="email" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Address*</label>
                                                    <input class="form-control h_50" type="text" name="address" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group main-form mt-4">
                                                    <label class="form-label">Country*</label>
                                                    <select class="selectpicker" data-size="5" title="Nothing selected"
                                                        name="country" data-live-search="true">
                                                        <x-utils.country-select-options />
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">State/Division*</label>
                                                    <input class="form-control h_50" type="text" name="state"
                                                        value="Chattogram" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">City/Suburb*</label>
                                                    <input class="form-control h_50" type="text" name="city"
                                                        value="Chattogram" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Zip/Post Code*</label>
                                                    <input class="form-control h_50" type="text" name="zip_code"
                                                        value="4000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mt-5">
                                    <div class="bp-title">
                                        <h4>
                                            Total Payable Amount : ${{ $ticketPrice->price ?? 50 }}
                                        </h4>
                                    </div>
                                    <div class="bp-content bp-form">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
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
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="main-btn btn-hover h_50 w-100 mt-5">
                                                    Confirm & Pay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12" id="billing_info">
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
