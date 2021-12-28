<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Businnes, Portfolio, Corporate">
    <meta name="Author" content="WebThemez">
    <title>Peninsula</title>
    <link rel="stylesheet" href="{{ asset('/index/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/elegant_font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/elegant_font/lte-ie7.js') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/slider-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/elegant_font/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/index/css/style.css') }}">

</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="status"></div>
</div>


<header>
    <nav id="topNav" class="navbar navbar-default main-menu nav ">
        <div class="container">
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse"
                    data-target="#ourNavbar">
                ☰
            </button>

            <div class="collapse navbar-toggleable-sm" id="ourNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home" class="home">HOME</a>
                    </li>
                    <li>
                        <a href="#about">ABOUT</a>
                    </li>


                    <li>
                        <a href="#services">SERVICES</a>
                    </li>

                    <li>
                        <a href="#menuCard">MENU</a>
                    </li>
                    <li>
                        <a href="#portfolio">GALLERY</a>
                    </li>
                    <li>
                        <a href="C:\Users\ASUS\Desktop">CHEFS</a>
                    </li>
                    <li>
                        <a href="reservation">RESERVATION</a>
                    </li>
                    <li>
                        <a href="feedBackme">FEEDBACK</a>
                    </li>
                    <li>
                        <a href="#contact">CONTACT US</a>
                    </li>



                </ul>


            </div>
        </div>
    </nav>

</header>-->
<!-- Header End -->

<!-- Start header -->


<!-- End header -->

<section class="slider-pro slider" id="slider">
    <div class="sp-slides">

        <!-- Slides -->
        <div class="sp-slide main-slides">
            <div class="img-overlay"></div>

            <img class="sp-image" id="logo" src="{{asset('/index/images/slider')}}/slider-img-2.jpg" alt="">
            <h1 class="sp-layer slider-text-big" data-position="left" data-show-transition="left"
                data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                <span class="highlight-texts">The peninsula</span>
            </h1>

            <p class="sp-layer" data-position="left" data-vertical="15%" data-show-delay="2000"
               data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                the top restaurant*_*
            </p>
        </div>
        <!-- Slides End -->

        <!-- Slides -->
        <div class="sp-slide main-slides">
            <div class="img-overlay"></div>
            <img class="sp-image" id="logo" src="{{asset('/index/images/slider')}}/slider-img-1.jpg" alt="">


            <!--  <h1 class="sp-layer slider-text-big" data-position="left" data-show-transition="left"
                data-hide-transition="right" data-show-delay="1500" data-hide-delay="200">
                <span class="highlight-texts">Top test</span>
            </h1>

            <p class="sp-layer" data-position="left" data-vertical="15%" data-show-delay="2000"
                data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                the right place
            </p>-->
        </div>
        <!-- Slides End -->

        <!-- Slides -->
        <div class="sp-slide main-slides">
            <div class="img-overlay"></div>
            <img class="sp-image" id="logo" src="{{asset('/index/images/slider')}}/slider-img-3.jpg" alt="">
        </div>
        <!-- Slides End -->

    </div>
</section>
<!-- Main Slider End -->

<section id="log" class="login and signup">
    <!-- The Modal (contains the Sign Up form) -->
    <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                  title="Close Modal">Exite</span>
        <form class="modal-content" action="/action_page.php" target="_blank" method="POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="username"><b>username</b></label>
                <input type="text" placeholder="username" id="username" required>
                <label for="phone"><b>phone</b></label>
                <input type="text" placeholder="09184233970" id="phone">
                <label for="date">Date</label>
                <input type="date" id="date">
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="example@gmai.com" id="email" required>

                <label for="passw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password mor than 8 characters" id="passw" required
                       minlength="8" maxlength="20">

                <label for="psw-confirm"><b>Confirm Password</b></label>
                <input type="password" placeholder="Repeat Password" id="psw-confirm" required minlength="8"
                       maxlength="20">

                <label>
                    <input type="checkbox" checked="checked" id="remember" style="margin-bottom:15px"> Remember
                    me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &
                        Privacy</a>.
                </p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                            class="cancelbtn">Cancel</button>
                    <button type="submit" class="signup">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="login">
    <!-- Button to open the modal login form -->
    <!-- The Modal -->
    <div id="id011" class="modall">
            <span onclick="document.getElementById('id011').style.display='none'" class="closee"
                  title="Close Modal">Exite</span>

        <!-- Modal Content -->
        <form class="modal-contentt animate" action="/action_page.php">
            <div class="imgcontainer">
                <img src="images/avatar2.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="username" required>

                <label for="passw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="passw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id011').style.display='none'"
                        class="cancelbtnn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
</section>

<section id="about" class="about-sec section-wrapper description">
    <div class="container">
        <div class="row">
            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">About</span></h2>

                <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">The peninsula restaurant
                    is an
                    all-in-one POS and restaurant management system that makes running a restaurant easier.
                    Built to meet the unique needs of the restaurant industry, TouchBistro is fast, reliable,
                    and easy to use, and has all of the features restaurateurs need to increase sales, deliver a
                    great guest experience, and save both time and money. By pairing innovative restaurant
                    technology and dedication to customer support and success.</p>
            </div>
            <!-- Section Header End -->

            <div class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown">
                <br>
                <br><br><br>
                <img class="sp-image" id="logo" src="{{asset('/index/images')}}/blog-1.jpg" style="height: 420px;width:400px" alt="">

            </div>
            <div>

                <video controls px width="500 px" height="500 px" autoplay loop>
                    <source src="{{asset('/index/videos')}}/Weddings at The Peninsula Gardens!.mp4" type="video/mp4">
                </video>

            </div>

        </div>
</section>

<section id="services" class="section-wrapper">
    <div class="container">
        <div class="row">

            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">Services</span></h2>

                <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">the peninsula restaurant
                    system.</p>
            </div>
            <!-- Section Header End -->

            <div class="our-services">


                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
                        <div class="service-box">
                            <div class="icon">
                                <h3>Breakfast</h3>
                            </div>
                            <p>the peninsula restaurant system.</p>
                            <img class="sp-image" id="logo" src="{{asset('/index/images')}}/breakfast.jpg" alt="">


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
                        <div class="service-box">
                            <div class="icon">
                                <h3>Lunch </h3>
                            </div>

                            <p>the peninsula restaurant system.</p>
                            <img class="sp-image" id="logo" src="{{asset('/index/images')}}/lunch.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
                        <div class="service-box">
                            <div class="icon">
                                <h3>Dinner</h3>
                            </div>

                            <p>the peninsula restaurant system.</p>
                            <img class="sp-image" id="logo" src="{{asset('/index/images')}}/dinner.jpg" alt="">

                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
                        <div class="service-box">
                            <div class="icon">
                                <i class="icon_star-half_alt"></i>
                                <h3>Buffeat</h3>
                            </div>

                            <p>the peninsula restaurant system.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
                        <div class="service-box">
                            <div class="icon">
                                <i class="icon_music"></i>
                                <h3>Parties</h3>
                            </div>

                            <p>the peninsula restaurant system..</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s">
                        <div class="service-box">
                            <div class="icon">
                                <i class="icon_cog"></i>
                                <h3>Rooms</h3>
                            </div>

                            <p>the peninsula restaurant system.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="menus style3" id="menuCard">
    <div class="container">
        <div class="row">

            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">Menu Card</span></h2>

                <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">the peninsula restaurant
                    system.</p>
            </div>
            <!-- Section Header End -->

            <div class="menus-container">
                <!-- menu -->
                <div class="menu row">
                    <div class="col-md-6 wow fadeInRight animated"
                         style="visibility: visible; animation-name: fadeInRight;">
                        <div class="menu-column">
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Chicken Masala</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>5.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with “butter”</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Mango Rice with Curd</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>16.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with chat masala</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Mutton Fry Rice</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>22.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with pure meat</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Eggs Mancuriya</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>22.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with Vegies</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Chicken Currey </h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>15.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with curry leafs</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                        </div><!-- /menu-column -->
                    </div><!-- /col-md-6 -->
                    <div class="col-md-6 wow fadeInLeft animated"
                         style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="menu-column">
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Pure Veg Salad</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>5.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with all veg</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Veg Fry Rice</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>16.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with best fry</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Chines Noodles</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>22.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with all spices</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Chicken Manchuriah</h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>22.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with hot and wet</span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                            <div class="food">
                                <div class="food-desc">
                                    <h6 class="food-name">Veg Fry Rice </h6>
                                    <div class="dots"></div>
                                    <div class="food-price">
                                        <span>15.00</span>
                                    </div><!-- /food-price -->
                                </div><!-- /food-desc -->
                                <div class="food-details">
                                    <span>with egg and chicken </span>
                                </div><!-- /food-details -->
                            </div><!-- /food -->
                        </div><!-- /menu-column -->
                    </div><!-- /col-md-6 -->
                </div><!-- /row -->
            </div><!-- /menu-carousel -->
        </div><!-- /menus-container -->
    </div><!-- /container -->
</section>


<section id="portfolio" class="bgSection portfolio-section">
    <div class="container">
        <div class="row">

            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">Gallery</span></h2>

                <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit
                    amet,
                    consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum
                    aliquam, quis deserunt eos eius quisquam odio itaque.</p>
            </div>
            <!-- Section Header End -->

        </div>
    </div>

    <!-- Works -->
    <div class="portfolio-works wow fadeIn" data-wow-duration="2s">

        <!-- Filter Button Start -->
        <div id="portfolio-filter" class="portfolio-filter-btn-group">
            <ul>
                <li>
                    <a href="#" class="selected" data-filter="*">ALL</a>
                    <a href="#" data-filter=".web">CHINES</a>
                    <a href="#" data-filter=".seo">CONTINENTAL</a>
                    <a href="#" data-filter=".works">ASIAN</a>
                    <a href="#" data-filter=".brands">EUROPEN</a>
                </li>
            </ul>
        </div>
        <!-- Filter Button End -->

        <div class="portfolio-items">

            <!-- Portfolio Items -->
            <div class="item portfolio-item web seo">
                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio1.jpg" alt="">


                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio1.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item works seo">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio2.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio2.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item web">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio3.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio3.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item web works brands">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio4.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio4.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Items -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item web brands">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio5.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio5.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item works seo">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio6.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio6.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <div class="item portfolio-item brands seo">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio1.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio7.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->

            <!-- Portfolio Items -->
            <div class="item portfolio-item web seo works">

                <img class="sp-image" id="logo" src="{{asset('/index/images/img-portfolio')}}/portfolio2.jpg" alt="">
                <div class="portfolio-details-wrapper">
                    <div class="portfolio-details">
                        <div class="portfolio-meta-btn">
                            <ul class="work-meta">
                                <li class="lighbox"><a href="/index/images/img-portfolio/portfolio8.jpg"
                                                       class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Items End -->



        </div>
    </div>
    <!-- Works End -->


</section>
<!-- Portfolio Section End -->


<section id="info" class="info-section">
    <div class="container text-xs-center">
        <!-- Section Header -->
        <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
            <h2><span class="highlight-text">Stats</span></h2>

            <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">the peninsula restaurant
                system.</p>
        </div>
        <!-- Section Header End -->
        <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">

                <i class="icon_mic_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
                <h4>Margins</h4>
                <h1 class="text-primary">100,000</h1>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">

                <i class="icon_gift_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
                <h4>Completed</h4>
                <h1 class="text-primary">34201</h1>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">

                <i class="icon_mobile wow pulse" style="visibility: visible; animation-name: pulse;"></i>
                <h4>Projects</h4>
                <h1 class="text-primary">152</h1>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-xs-center">

                <i class="icon_lightbulb_alt wow pulse" style="visibility: visible; animation-name: pulse;"></i>
                <h4>Customers</h4>
                <h1 class="text-primary">56500</h1>
            </div>
        </div>
    </div>
</section>

<section id="team" class="bgSection teams-section">
    <div class="parallax-overlay"></div>
    <div class="teams-wrapper wow fadeInDown">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text-inverted">Chefs</span></h2>

                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">the peninsula
                        restaurant system.</p>
                </div>

                <!-- teams Slider -->
                <div id="teams" class="owl-carousel teams">

                    <!-- Slides -->
                    <div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
                        <img class="sp-image" id="logo" src="{{asset('/index/images/img-teams')}}/team1.jpg" alt="">

                        <p class="client-info">Chris Willam</p>
                        <p>the peninsula restaurant system.</p>

                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
                        <img class="sp-image" id="logo" src="{{asset('/index/images/img-teams')}}/team2.jpg" alt="">
                        <p class="client-info">Randy Dode</p>
                        <p>the peninsula restaurant system.</p>

                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="teams-slides col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
                        <img class="sp-image" id="logo" src="{{asset('/index/images/img-teams')}}/team3.jpg" alt="">
                        <p class="client-info">Michel Kimte</p>
                        <p>the peninsula restaurant system.</p>

                    </div>
                    <!-- Slides End -->

                </div>
            </div>
        </div>
    </div>
</section>



<!-- Client Section End -->

<section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">Contact Us</span></h2>

                
            </div>
            <!-- Section Header End -->

            <div class="contact-details">


                <!-- Contact Form -->
                <div class="contact-form wow bounceInRight">

                    <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                      
                    <div class="col-md-3">
                    <img class="" id="" src="{{asset('admin')}}/admin.png" alt="" style="border-radius:25%;">
                    
                    <br><br>
                         <p style=" font-style: oblique; text-align: center; font-size: large;">Amara Shujaa</p>
                        <p style=" font-style: oblique; text-align: center; font-size: large;">Front-end develober</p> 
                        
            <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="mailto:amarashujaa@gmail.com subject=text">amarashujaa@gmail.com</a></p>
               <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="whatsapp://send?text=Hello!&phone=⁦+963 981 255 082⁩"> ⁦+963 981 255 082⁩</a> </p> 
                        
                     </div>

                     <div class="col-md-1">
                              </div> 

                    <div class="col-md-3">
                    <img class="" id="" src="{{asset('admin')}}/admin.png" alt="" style="border-radius:25%;">
                    <br><br>
                    <p style=" font-style: oblique; text-align: center; font-size: large;" >Lina Ghojan </p>
                    <p style=" font-style: oblique; text-align: center; font-size: large;">Back-end develober</p>  
                         
            <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="mailto:linaghojan2000@gmail.com subject=text">linaghojan2000@gmail.com</a></p>
               <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="whatsapp://send?text=Hello!&phone=+963 956 459 373"> ⁦+963 956 459 373</a> </p>   
                    </div>
                    
                    <div class="col-md-1">
                              </div> 
                    <div class="col-md-3">
                    <img class="" id="" src="{{asset('admin')}}/admin.png" alt="" style="border-radius:25%">
                    <br><br>
                    <p style=" font-style: oblique; text-align: center; font-size: large;">Tamadour Jbawi </p>
                    <p style=" font-style: oblique; text-align: center; font-size: large;">Front-end develober</p>  
                          
            <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="mailto:tamaderzakarea@gmail.com subject=text">tamaderzakarea@gmail.com</a></p>
               <p style=" font-style: oblique; text-align: center; font-size: large;"><a href="whatsapp://send?text=Hello!&phone= ⁦+963 987 194 976⁩"> ⁦+963 987 194 976⁩</a>  </p>   
                    </div>
          

                    
                
                    </form>
                </div>

            </div>
        </div>
</section>




<!-- Contact Section End -->
<section class="footer-container">
    <div class="container">
        <div class="row footer-containertent">
            <div class="col-md-4">
                <img src="images/logo.png" alt="">
                <p>the peninsula restaurant system.</p>
            </div>
            <div class="col-md-4">
                <h4>News & Updates</h4>
                <p>the peninsula restaurant system.</p>
            </div>
            <div class="col-md-4 contac-us">
                <h4>Contact Us</h4>
                <p>The peninsula restaurant.</p>
                <ul>
                    <li><i class="fa fa-home"></i>123 New Venu Street</li>
                    <li><i class="fa fa-phone"></i>001 123 12345 99</li>
                    <li><i class="fa fa-envelope-o"></i>peninsula@website.com</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<footer>

    <div class="container">
        <div class="row">
            <div class="footer-containertent">

                <ul class="footer-social-info">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
                <br /><br />
                <p>Copyright © 2021. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank"
                                        title="Free Bootstrap Templates">THE Peninsula</a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<script src="{{ asset('/index/js/jquery-1.11.3.min.js') }}" defer></script>
<script src="{{ asset('/index/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('/index/js/modernizr.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.easing.1.3.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.scrollUp.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.easypiechart.js') }}" defer></script>


<script src="{{ asset('/index/js/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.fitvids.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.stellar.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.nav.js') }}" defer></script>
<script src="{{ asset('/index/js/wow.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.waypoints.min.js') }}" defer></script>


<script src="{{ asset('/index/js/imagesloaded.pkgd.min.js') }}" defer></script>
<script src="{{ asset('/index/js/smooth-scroll.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('/index/js/jquery.sliderPro.min.js') }}" defer></script>
<script src="{{ asset('/index/js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('/index/contact/jqBootstrapValidation.js') }}" defer></script>
<script src="{{ asset('/index/contact/contact_me.js') }}" defer></script>
<script src="{{ asset('/index/js/custom.js') }}" defer></script>



</body>

</html>
