<!doctype html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Anmay Foundation";
    ?>
    <title><?php echo $pageTitle; ?></title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Anmay Foundation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
</head>

<body id="section_1">
<style>
    .contact-form button[type="submit"] {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.contact-form .spinner {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.contact-form .spinner svg {
    color: white;
    animation: rotate 2s linear infinite;
}

@keyframes rotate {
    100% {
        transform: rotate(360deg);
    }
}
</style>
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
                            <a href="https://www.instagram.com/_anmay_foundation_/"
                                class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.youtube.com/@anmay_foundation" class="social-icon-link bi-youtube"></a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </header>

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
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#top">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Causes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn" href="{{ url('/donate') }}">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <main>

        <section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slide/IMG_5173.JPG') }}" class="carousel-image img-fluid" alt="Slide 1">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/IMG_5159.JPG') }}" class="carousel-image img-fluid" alt="Slide 2">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/IMG_5105.JPG') }}" class="carousel-image img-fluid" alt="Slide 3">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/IMG_5107.JPG') }}" class="carousel-image img-fluid" alt="Slide 4">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/IMG_4687.JPG') }}" class="carousel-image img-fluid" alt="Slide 5">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/IMG_4685.JPG') }}" class="carousel-image img-fluid" alt="Slide 6">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

       <section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Welcome to Anmay Foundation</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="{{ url('/donate') }}" class="d-block">
                        <img src="{{ asset('images/icons/child all.jpeg') }}" class="featured-block-image img-fluid" alt="Educate to Visually Impaired">

                        <p class="featured-block-text">Educate to <strong>Visually Impaired</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="{{ url('/donate') }}" class="d-block">
                        <img src="{{ asset('images/ganga.jpg') }}" class="featured-block-image img-fluid" alt="Support to Baby Ganga">

                        <p class="featured-block-text"><strong>Support to Baby Ganga</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="{{ url('/donate') }}" class="d-block">
                        <img src="{{ asset('images/icons/receive.JPG') }}" class="featured-block-image img-fluid" alt="Elderly Care">

                        <p class="featured-block-text"><strong>Elderly Care</strong></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-bg" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{ asset('images/IMG_4543.JPG') }}" class="custom-text-box-image img-fluid" alt="About Anmay Foundation">
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-box">
                    <h2 class="mb-2">About Anmay Foundation</h2>

                    <h5 class="mb-3"></h5>

                    <p>
                        Anmay Foundation, India is a Non-Government organisation NGO which has been working for
                        the Visually Challenged and Senior Citizens of India since 2017. Anmay Foundation has
                        set up a network of volunteers spread across India and interacts visually challenged and
                        older persons on daily basis through its volunteers’ network.
                    </p>
                    <p>
                        Our successful program outcomes are thanks to our donors who make our work possible.
                        Thanks to you, we are able to make a sustainable impact and see results in the fight
                        against avoidable blindness.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box mb-lg-0">
                            <h5 class="mb-3">Our Mission</h5>

                            <p>Anmay Foundation has been set up to initiate better interaction between the generations. It endeavors to:</p>

                            <ul class="custom-list mt-2">
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Bring about a change in perceptions about Visually Challenged
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    Initiate steps towards senior citizens friendly environment
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                            <div class="counter-thumb">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="2017" data-speed="1000"></span>
                                    <span class="counter-number-text"></span>
                                </div>
                                <span class="counter-text">Founded</span>
                            </div>

                            <div class="counter-thumb mt-4">
                                <div class="d-flex">
                                    <span class="counter-number" data-from="1" data-to="50" data-speed="1000"></span>
                                    <span class="counter-number-text">k</span>
                                </div>
                                <span class="counter-text">Donations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


       <section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="{{ asset('images/apj (2).jpg') }}" 
                     class="about-image ms-lg-auto bg-light shadow-lg img-fluid" 
                     alt="Dr. APJ Abdul Kalam">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0">Dr. APJ Abdul Kalam</h2>
                    <p class="text-muted mb-lg-4 mb-md-4">Former President of India</p>

                    <p>
                        Equality between people should be regardless their race, colours, creed and cultures. 
                        Dr. Kalam views that a society can make progress only when it gives equal opportunity to 
                        women in all walks of life. He was a supporter for women empowerment.
                    </p>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 ms-auto">
                <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
            </div>

           <div class="col-lg-5 col-12">
                <a href="{{ route('donate') }}" class="me-4">Make a donation</a>
                <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
            </div>


        </div>
    </div>
</section>


<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>Our Causes</h2>
            </div>

            {{-- Cause 1 --}}
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/education.jpeg') }}" 
                         alt="Blindness Education" width="380">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Blindness Education</h5>

                            <div class="progress mt-4">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0"><strong>Raised:</strong> Rs 7,500</p>
                                <p class="ms-auto mb-0"><strong>Goal:</strong> Rs 50,000</p>
                            </div>
                        </div>

                        <a href="{{ url('/donate') }}" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

            {{-- Cause 2 --}}
            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/IMG-20240919.jpg') }}" 
                         alt="Senior Citizens Support" width="350" height="285">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Senior Citizens Support</h5>

                            <div class="progress mt-4">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0"><strong>Raised:</strong> Rs 11,600</p>
                                <p class="ms-auto mb-0"><strong>Goal:</strong> Rs 60,000</p>
                            </div>
                        </div>

                        <a href="{{ url('/donate') }}" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

            {{-- Cause 3 --}}
            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/raasan.jpeg') }}" 
                         alt="Raasan Distribution" width="380" height="285">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Raasan Distribution</h5>

                            <div class="progress mt-4">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="d-flex align-items-center my-2">
                                <p class="mb-0"><strong>Raised:</strong> Rs 15,600</p>
                                <p class="ms-auto mb-0"><strong>Goal:</strong> Rs 50,000</p>
                            </div>
                        </div>

                        <a href="{{ url('/donate') }}" class="custom-btn btn">Donate now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        <section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            {{-- Volunteer Form --}}
            <div class="col-lg-6 col-12">
                <h2 class="text-white mb-4">Volunteer</h2>

                <form class="custom-form volunteer-form mb-5 mb-lg-0"
                      action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-4">Become a volunteer today</h3>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" name="name" class="form-control" placeholder="Jack Doe" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="email" name="email" class="form-control" placeholder="Jackdoe@gmail.com" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="input-group input-group-file">
                                <input type="file" class="form-control" name="cv" required>
                                <label class="input-group-text">Upload your CV</label>
                                <i class="bi-cloud-arrow-up ms-auto"></i>
                            </div>
                        </div>
                    </div>

                    <textarea name="message" rows="3" class="form-control" placeholder="Comment (Optional)"></textarea>

                    <button type="submit" class="form-control">Submit</button>
                </form>
            </div>

            {{-- Volunteer Info --}}
            <div class="col-lg-6 col-12">
                <img src="{{ asset('images/volunteer.JPG') }}" class="volunteer-image img-fluid" alt="Volunteers">

                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>
                    <p class="text-white">
                        Volunteer to help people with blindness, health needs. 
                        We're a leading blindness charity providing support at home or in the community.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- Testimonials --}}
<section class="testimonial-section section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h2 class="mb-lg-3">Happy customers</h2>

                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        {{-- Example Testimonial --}}
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">I am very much impressed with the work of your organisation.</h4>
                                <small class="carousel-name"><span class="carousel-name-title">Meena</span>, Singh</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">I am thankful to Anmay Foundation for providing free Raasan to Senior Citizens.</h4>
                                <small class="carousel-name"><span class="carousel-name-title">Deepak</span>, Maurya</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">Anmay Foundation is doing a very great job.</h4>
                                <small class="carousel-name"><span class="carousel-name-title">Soumya</span>, Gupta</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">Vision of organisation is excellent. Working for visually challenged & seniors since 2017 in India.</h4>
                                <small class="carousel-name"><span class="carousel-name-title">Amarpreet</span>, Singh</small>
                            </div>
                        </div>

                        {{-- Carousel Indicators --}}
                        <ol class="carousel-indicators">
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                <img src="{{ asset('images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg') }}"
                                     class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1">
                                <img src="{{ asset('images/avatar/portrait-young-redhead-bearded-male.jpg') }}"
                                     class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2">
                                <img src="{{ asset('images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                                     class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3">
                                <img src="{{ asset('images/avatar/studio-portrait-emotional-happy-funny.jpg') }}"
                                     class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- Contact --}}
<section class="contact-section section-padding" id="section_6">
    <div class="container">
        <div class="row">

            {{-- Contact Info --}}
            <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                <div class="contact-info-wrap">
                    <h2>Get in touch</h2>

                    <div class="contact-image-wrap d-flex flex-wrap">
                        <img src="{{ asset('images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                             class="img-fluid avatar-image" alt="contact person">
                        <div class="d-flex flex-column justify-content-center ms-3">
                            <p class="mb-0">Ankita Gupta</p>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h5 class="mb-3">Contact Information</h5>

                        <p class="d-flex mb-2">
                            <i class="bi-geo-alt me-2"></i>
                            24 Radhey Puri Extension-1, Krishna Nagar, Delhi-110051
                        </p>

                        <p class="d-flex mb-2">
                            <i class="bi-telephone me-2"></i>
                            <a href="tel:+919311275728">+91 93112 75728</a>
                        </p>

                        <p class="d-flex">
                            <i class="bi-envelope me-2"></i>
                            <a href="mailto:donate@anmayfoundationindia.org">donate@anmayfoundationindia.org</a>
                        </p>

                        <a href="https://maps.google.com" target="_blank" class="custom-btn btn mt-3">Get Direction</a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="col-lg-5 col-12 mx-auto">
                <form class="custom-form contact-form" action="" method="POST">
                    @csrf
                    <h2>Contact form</h2>
                    <p class="mb-4"><a href="mailto:info@anmayfoundationindia.org">info@anmayfoundationindia.org</a></p>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                    </div>

                    <input type="email" name="email" class="form-control" placeholder="E-mail ID" required>
                    <textarea name="message" rows="5" class="form-control" placeholder="Your Message"></textarea>

                    <button type="submit" class="form-control">Submit</button>
                </form>
            </div>

        </div>
    </div>
</section>

    </main>

    <footer class="site-footer">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-3 col-12 mb-4">
                <img src="{{ asset('images/anmay logo.png') }}" class="logo img-fluid" alt="Anmay Foundation Logo">
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3">Quick Links</h5>
                <ul class="footer-menu">
                    <li class="footer-menu-item"><a href="{{ url('/about') }}" class="footer-menu-link">Our Story</a></li>
                    <li class="footer-menu-item"><a href="{{ url('/newsroom') }}" class="footer-menu-link">Newsroom</a></li>
                    <li class="footer-menu-item"><a href="{{ url('/causes') }}" class="footer-menu-link">Causes</a></li>
                    <li class="footer-menu-item"><a href="#section_4" class="footer-menu-link">Become a volunteer</a></li>
                    <li class="footer-menu-item"><a href="{{ url('/partners') }}" class="footer-menu-link">Partner with us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6 col-12 mx-auto">
                <h5 class="site-footer-title mb-3">Contact Information</h5>
                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone me-2"></i>
                    <a href="tel:+919311275728" class="site-footer-link">+91 93112 75728</a>
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
                <a href="https://maps.google.com/?q=24+Radhey+Puri+Extension-1+Delhi" 
                   class="custom-btn btn mt-3" target="_blank">Get Direction</a>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">
                <!-- Copyright -->
                <div class="col-lg-6 col-md-7 col-12">
                    <p class="copyright-text mb-0">
                        Copyright © {{ date('Y') }}
                        <a href="{{ url('/') }}">Anmay Foundation</a>
                    </p>
                </div>

                <!-- Social Icons -->
                <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                    <ul class="social-icon">
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-facebook"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>
                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-linkedin"></a></li>
                        <li class="social-icon-item"><a href="https://youtube.com/templatemo" target="_blank" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <!-- Rest of your HTML -->
     <script>
     document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Show loading state
        submitButton.innerHTML = `
            <div class="spinner">
                <svg viewBox="0 0 50 50" width="20" height="20">
                    <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="4" 
                            stroke-dasharray="31.415, 31.415" stroke-dashoffset="0">
                        <animateTransform attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" 
                                          dur="1s" repeatCount="indefinite"/>
                    </circle>
                </svg>
            </div>
            Sending...
        `;
        submitButton.disabled = true;
        
        try {
            // Submit form data
            const formData = new FormData(form);
            
            // Start submission and timer simultaneously
            const submission = fetch(form.action, {
                method: form.method,
                body: formData
            });
            
            // Minimum 3-second loading for better UX
            const minLoadingTime = new Promise(resolve => setTimeout(resolve, 3000));
            
            await Promise.all([submission, minLoadingTime]);
            
            // Show success
            submitButton.innerHTML = `
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" 
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                Message Sent!
            `;
            
            // Reset after 2 seconds
            setTimeout(() => {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                form.reset();
            }, 2000);
            
        } catch (error) {
            // Handle errors
            submitButton.innerHTML = `Error - Try Again`;
            submitButton.disabled = false;
            console.error('Form submission error:', error);
        }
    });
});
     </script>
</body>
</html>