@extends("layout")
@section("title", "A Propos")
@section("content")
    <body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="welcome.blade.php">
                        <img src="{{ asset('../images/logo.png') }}" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ URL::to('/about') }}"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/shop') }}">Shop </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/furniture') }}"> Furniture </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/contact') }}">Contact us</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="{{ URL::to('/login') }}">
                                <img src="{{ asset('images/user.png') }}" alt="">
                                <span>Login</span>
                            </a>
                            <a href="">
                                <img src="{{ asset('images/chariot.png') }}" alt="" width="30" height="30">
                            </a>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                <span class=" s-1">

                </span>
                                <span class="s-2">

                </span>
                                <span class="s-3">

                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>

                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('../images/about-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_logo">
                <h2>
                    Digitf
                </h2>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            About Shop
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('../images/location-white.png') }}" width="18px" alt="">
                            </div>
                            <p>
                                Address
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('../images/telephone-white.png') }}" width="12px" alt="">
                            </div>
                            <p>
                                +01 1234567890
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('../images/envelope-white.png') }}" width="18px" alt="">
                            </div>
                            <p>
                                demo@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Informations
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_insta">
                        <h5>
                            Instagram
                        </h5>
                        <div class="insta_container">
                            <div>
                                <a href="">
                                    <div class="insta-box b-1">
                                        <img src="{{ asset('../images/i-1.jpg') }}" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-2">
                                        <img src="{{ asset('../images/i-2.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="">
                                    <div class="insta-box b-3">
                                        <img src="{{ asset('../images/i-3.jpg') }}" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-4">
                                        <img src="{{ asset('../images/i-4.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <div class="insta-box b-3">
                                        <img src="{{ asset('../images/i-5.jpg') }}" alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="insta-box b-4">
                                        <img src="{{ asset('../images/i-6.jpg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; 2019 All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->
    </body>
@endsection
