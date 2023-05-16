@extends('organization.layout')
@section('content')
    <x-modals.org-settings-modal />
    <x-modals.org-privacy-settings-modal />
    <x-modals.org-profile-update-modal />
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3>
                                <i class="fa-solid fa-circle-info me-3"></i>About My Organisation
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="bp-title position-relative">
                                    <h4>About</h4>
                                    <div class="profile-edit-btn">
                                        <a href="{{ url('#') }}" data-bs-toggle="modal" data-bs-target="#orgSettings"
                                            class="btn"><i class="fa-solid fa-user-gear"></i></a>
                                        <a href="{{ url('#') }}" data-bs-toggle="modal"
                                            data-bs-target="#orgPrivacySettings" class="btn"><i
                                                class="fa-solid fa-gear"></i></a>
                                        <a href="{{ url('#') }}" data-bs-toggle="modal"
                                            data-bs-target="#org-profile-update-pop" class="btn"><i
                                                class="fa-solid fa-pen"></i></a>
                                    </div>
                                </div>
                                <div class="about-details">
                                    <div class="about-step text-center">
                                        <div class="user-avatar-img">
                                            <img src="{{ asset('/asset/barren/images/avatar.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="user-dts">
                                            <h4 class="user-name">
                                                {{auth()->user()->name}}<span class="verify-badge"><i
                                                        class="fa-solid fa-circle-check"></i></span>
                                            </h4>
                                            <span class="user-email">
                                                {{auth()->user()->email}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="about-step">
                                        <h5>
                                            Tell us about yourself and let
                                            people know who you are
                                        </h5>
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Ut
                                            tincidunt interdum nunc et
                                            auctor. Phasellus quis pharetra
                                            sapien. Integer ligula sem,
                                            sodales vitae varius in, varius
                                            eget augue.
                                        </p>
                                    </div>
                                    <div class="about-step">
                                        <h5>Find me on</h5>
                                        <div class="social-links">
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Facebook"
                                                aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Instagram"
                                                aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Twitter"
                                                aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="LinkedIn"
                                                aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Youtube"
                                                aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                                            <a href="{{ url('#') }}" class="social-link" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="" data-bs-original-title="Website"
                                                aria-label="Website"><i class="fa-solid fa-globe"></i></a>
                                        </div>
                                    </div>
                                    <div class="about-step">
                                        <h5>Address</h5>
                                        <p class="mb-0">
                                            // TODO addre
                                        </p>
                                    </div>
                                    <div class="about-step">
                                        <a href="{{ url('#') }}" class="view-profile-link a-link">View Public
                                            Profile<i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></a>
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
