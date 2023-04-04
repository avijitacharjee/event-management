@extends('organization.layout')
@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3>
                                <i class="fa-solid fa-credit-card me-3"></i>Payouts
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="dashboard-wrap-content p-4">
                                <h5 class="mb-4">Added Bank Account (1)</h5>
                                <div class="d-md-flex flex-wrap align-items-center">
                                    <div class="dashboard-date-wrap">
                                        <div class="form-group">
                                            <div class="relative-input position-relative">
                                                <input class="form-control h_40" type="text"
                                                    placeholder="Search by coupon name" value="" />
                                                <i class="uil uil-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs ms-auto mt_r4">
                                        <button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal"
                                            data-bs-target="#bankModal">
                                            Add Bank Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-promotion-list">
                            <div class="main-card mt-4 p-4 pt-0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="bank-card p-4 mt-4">
                                            <h5>Bank Name</h5>
                                            <h6>John Doe</h6>
                                            <span>****1234</span>
                                            <div class="card-actions">
                                                <a href="{{ url('#') }}" class="action-link"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                <a href="{{ url('#') }}" class="action-link"><i
                                                        class="fa-solid fa-trash-can"></i></a>
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
