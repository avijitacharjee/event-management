<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Evento - Simple Online Event Ticketing System</title>

    <link rel="icon" type="image/png" href="{{ asset('asset/barren/images/evento-logo-icon.svg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('asset/barren/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/barren/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/barren/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    @include('public.header')


    @yield('content')


    <footer class="footer mt-auto">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-content">
                            <h4>Company</h4>
                            <ul class="footer-link-list">
                                <li><a href="about_us.html" class="footer-link">About Us</a></li>
                                <li><a href="help_center.html" class="footer-link">Help Center</a></li>
                                <li><a href="faq.html" class="footer-link">FAQ</a></li>
                                <li><a href="contact_us.html" class="footer-link">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-content">
                            <h4>Useful Links</h4>
                            <ul class="footer-link-list">
                                <li><a href="create.html" class="footer-link">Create Event</a></li>
                                <li><a href="sell_tickets_online.html" class="footer-link">Sell Tickets Online</a>
                                </li>
                                <li><a href="privacy_policy.html" class="footer-link">Privacy Policy</a></li>
                                <li><a href="term_and_conditions.html" class="footer-link">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-content">
                            <h4>Resources</h4>
                            <ul class="footer-link-list">
                                <li><a href="pricing.html" class="footer-link">Pricing</a></li>
                                <li><a href="our_blog.html" class="footer-link">Blog</a></li>
                                <li><a href="refer_a_friend.html" class="footer-link">Refer a Friend</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-content">
                            <h4>Follow Us</h4>
                            <ul class="social-links">
                                <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            </ul>
                        </div>
                        <div class="footer-content">
                            <h4>Download Mobile App</h4>
                            <div class="download-app-link">
                                <a href="#" class="download-btn"><img src="{{asset('asset/barren/images/app-store.png')}}"
                                        alt=""></a>
                                <a href="#" class="download-btn"><img src="{{asset('asset/barren/images/google-play.png')}}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copyright-text">
                            <p class="mb-0">© 2023, <strong>Evento</strong>. All rights reserved. Powered by
                                <a href="http://avijitacharjee.com">
                                    Avijitech Softwares
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script data-cfasync="false" src="{{asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{ asset('asset/barren/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('asset/barren/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('asset/barren/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('asset/barren/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('asset/barren/vendor/mixitup/dist/mixitup.min.js')}}"></script>
    <script src="{{ asset('asset/barren/js/custom.js')}}"></script>
    <script src="{{ asset('asset/barren/js/night-mode.js')}}"></script>
    <script>
        var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
    </script>
</body>
</html>
