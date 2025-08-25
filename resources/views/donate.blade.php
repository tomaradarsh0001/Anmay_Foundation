<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Anmay Foundation')</title>

    <!-- CSS FILES -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->
    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        24 Radhey Puri Extension-1, Krishna Nagar, Delhi-110051
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:info@anmayfoundationindia.org">
                            info@anmayfoundationindia.org
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="https://www.facebook.com/anmayfoundation" class="social-icon-link bi-facebook"></a>
                        </li>
                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/_anmay_foundation_/" class="social-icon-link bi-instagram"></a>
                        </li>
                        <li class="social-icon-item">
                            <a href="https://www.youtube.com/@anmay_foundation" class="social-icon-link bi-youtube"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/anmay logo.png') }}" class="logo img-fluid" alt="">
                <span>
                    Anmay Foundation
                    <small>Non-Government Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('welcome') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('welcome') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('welcome') }}">Causes</a></li>
                    <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('welcome') }}">Volunteer</a></li>
                    <li class="nav-item"><a class="nav-link click-scroll" href="{{ route('welcome') }}">Contact</a></li>
                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="{{ url('/donate') }}">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="{{ asset('images/Anmay upi.jpg') }}" width="300" height="350" alt="UPI QR">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <img src="{{ asset('images/Anmay Bank.jpg') }}" width="300" height="350" alt="Bank Details">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Information</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>
                        <a href="tel:+919311275728" class="site-footer-link">
                            +91 93112 75728
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:donate@anmayfoundationindia.org" class="site-footer-link">
                            donate@anmayfoundationindia.org
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        24 Radhey Puri Extension-1, Krishna Nagar, Delhi-110051
                    </p>

                    <a href="https://maps.google.com/?q=24+Radhey+Puri+Extension-1+Delhi" class="custom-btn btn mt-3" target="_blank">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">
                            Copyright © {{ date('Y') }}
                            <a href="{{ url('/') }}">Anmay Foundation</a>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>
                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-facebook"></a></li>
                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>
                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-linkedin"></a></li>
                            <li class="social-icon-item"><a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
