<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, shrink-to-fit=9" />
    <meta name="description" content="Gambolthemes" />
    <meta name="author" content="Gambolthemes" />
    <title>Evento - Simple Online Event Ticketing System</title>

    <link rel="icon" type="image/png" href="{{ asset('/asset/barren/images/evento-logo-icon.svg') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/unicons-2.0.1/css/unicons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/css/vertical-responsive-menu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/css/analytics.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/css/night-mode.css') }}" rel="stylesheet" />

    <link href="{{ asset('/asset/barren/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/chartist/dist/chartist.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset/barren/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css') }}"
        rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">


    @include('organization.navbar')

    @include('organization.sidebar')

    @yield('content')

    <script data-cfasync="false"
        src="{{ asset('/asset/barren/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('/asset/barren/js/vertical-responsive-menu.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('/asset/barren/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('/asset/barren/js/analytics.js') }}"></script>
    <script src="{{ asset('/asset/barren/js/custom.js') }}"></script>
    <script src="{{ asset('/asset/barren/js/night-mode.js') }}"></script>
</body>

</html>
