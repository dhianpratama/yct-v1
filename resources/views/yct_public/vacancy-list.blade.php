<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<!-- Mirrored from eazzy.me/html/imevent-multipage/event-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Sep 2016 04:24:01 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YCT</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

        <link href="assets/css/theme.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide body-light multipage multipage-sub">

        <!-- Preloader -->
        <!--
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>
        -->

    <!-- Wrap all content -->
<div class="wrapper" id="scholarshiplistpage">

            <!-- HEADER -->
<header class="header fixed">
    <!-- Top Line -->
    <div class="top-line">
        <div class="container">
            <div class="yct-agent pull-left">
                <a href="#">Join as <span class="yct-orange">YCT</span> agent</a>
            </div>
            <ul class="user-menu">
                <li class="reg"><a href="#popup-login"  data-toggle="modal"> Register</a></li>
                <li class="login"><a href="#popup-login" data-toggle="modal"> Login</a></li>
            </ul>
            <!--<div class="hot-line"><span><i class="fa fa-calendar"></i> <strong>Latest Event:</strong></span>  Standart Event Name Here  "15 October at 20:00 - 22:00 on Manhattan / New York"</div>-->
        </div>
    </div>
    <!-- /Top Line -->

    <div class="container">
        <div class="header-wrapper clearfix">

            <!-- Logo -->
            <div class="logo">
                <a href="index.html" class="scroll-to">
                                <!--<span class="fa-stack">-->
                                    <!--<i class="fa logo-hex fa-stack-2x"></i>-->
                                    <!--<i class="fa logo-fa fa-map-marker fa-stack-1x"></i>-->
                                <!--</span>-->
                    <img src="assets/img/yct_logo.png" style="width:110px;" />
                </a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
           <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                            <ul class="sf-menu nav">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/events">Events</a>
                                </li>
                                <li class="active">
                                    <a href="/vacancies">Volunteer & Internship</a>
                                </li>
                                <li>
                                    <a href="/scholarships">Scholarship</a>
                                </li>
                                <li><a href="/about_us">About YCT</a></li>
                               <!-- <li><a href="/contact_us">Contact Us</a></li>-->
                                <!--<li class="header-search-wrapper">-->
                                    <!--<form action="#" class="header-search-form">-->
                                        <!--<input type="text" class="form-control header-search" placeholder="Search"/>-->
                                        <!--<input type="submit" hidden="hidden"/>-->
                                    <!--</form>-->
                                <!--</li>-->
                                <!--<li><a href="#" class="btn-search-toggle"><i class="fa fa-search"></i></a></li>-->
                                <!--<li><a href="#" class="btn btn-theme btn-submit-event">SUBMIT EVENT <i class="fa fa-plus-circle"></i></a></li>-->
                            </ul>
                        </nav>
            <!-- /Navigation -->

        </div>
    </div>
</header>
<!-- /HEADER -->

<!-- Content area -->
<div class="content-area">

    <section class="page-section image breadcrumbs overlay">
        <div class="container">
            <h1>INTERNSHIP & VOLUNTEER</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Scholarships</li>
            </ul>
        </div>
    </section>


<!-- PAGE -->

<section class="gray-bg page-section with-sidebar sidebar-right first-section">
    <div class="container">
        <!-- Content -->
        <section id="content" class="content col-sm-8 col-md-9">
            <div class="listing-meta clearfix">
                <div class="form-group selectpicker-wrapper sort-events">
                    <label>sort :</label>
                    <select
                            class="selectpicker sort-event" data-width="50%"
                            data-toggle="tooltip" title="Sort Events">
                        <!--<option>Relevances</option>-->
                        <option>Posted date</option>
                        <option>Start date</option>
                    </select>
                </div>
            </div>
            <div class="tab-pane fade active in">
                <!-- new card UI grid systems-->
                <div class="row">
                    <div class="events-grid clearfix"  >
                    <div class="yct-card" v-for="s in scholarships">
                        <div class="media">
                            <img src="assets/img/startup-593341_1920.jpg" alt="">
                            <div class="caption hovered"></div>
                        </div>
                        <div class="caption">
                            <div class="caption-header">
                                <div class="header-category">
                                    <p class="header-caption-category">@{{s.event_type_name }}</p>
                                </div>
                            </div>
                            <h3 class="caption-title"><a href="#">@{{s.title}}</a></h3>
                            <p class="caption-text vacancy">by <a href="#">@{{s.organizer_name}}</a> </p>
                            <div class="footer-price vacancy">
                                <div class="caption-price-txt">
                                    <span>OPEN UNTIL</span>
                                    <p>
                                        @{{displayDate(s.due_date)}}
                                    </p>
                                </div>
                                <div class="card-button">
                                    <a href="#" class="btn btn-theme-sm btn-theme-transparent pull-right">info</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /new card UI grid systems-->

                <!-- Pagination -->
                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- /Pagination -->

            </div>
        </section>
        <!-- /Content -->
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar col-sm-4 col-md-3 padding-left">

            <div class="widget">
                <form class="events-search-form">
                    {{--<input type="text" v-model="filter.keyword" class="form-control header-search" placeholder="Search"/>--}}
                    {{--<input type="submit" hidden="hidden" v-on:click="fetchEvents()" />--}}
                    {{--<span class="search-label"><i class="fa fa-search"></i></span>--}}
                    <div class="input-group filter-search">
                        <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i> </span>
                        <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                    </div>
                </form>
                <div class="form-group selectpicker-wrapper filter-topic">
                    <label>Select Topic :</label>
                    {{--<div class="select-style">--}}
                        {{--<select v-model="filter.categoryId" v-on:change="onChangeCategory(filter.categoryId)">--}}
                            {{--<option value="0">All Topics</option>--}}
                            {{--<option v-for="cat in categories" v-bind:value="cat.id">--}}
                                {{--@{{ cat.name }}--}}
                            {{--</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                </div>
                <div class="filter-title clearfix">
                    <h3>
                        Filter
                    </h3>
                    <hr>
                </div>

                <div class="form-group selectpicker-wrapper filter-time">
                    <label>filter by time :</label>
                    <select class="selectpicker input-time"  data-width="100%"  data-toggle="tooltip" title="Select Time">
                        <option>All Times</option>
                        <option>Today</option>
                        <option>This Week</option>
                        <option>Next Week</option>
                        <option>This Month</option>
                        <option>Next Month</option>
                    </select>
                </div>

                <div class="form-group selectpicker-wrapper filter-city">
                    <label>filter by city :</label>
                  <select
                            class="selectpicker input-location" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select City">
                        <option>All Cities</option>
                        <option>Bandung</option>
                        <option>Jakarta</option>
                        <option>Yogyakarta</option>
                        <option>Surabaya</option>
                        <option>Makassar</option>
                    </select>
                    {{--<div class="select-style">--}}
                        {{--<select v-model="filter.cityId" v-on:change="onChangeCity(filter.cityId)">--}}
                            {{--<option value="0">All Cities</option>--}}
                            {{--<option v-for="c in cities" v-bind:value="c.city_id">--}}
                                {{--@{{ c.city_name }}--}}
                            {{--</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="form-group selectpicker-wrapper filter-price">--}}
                    {{--<label>filter by price :</label>--}}
                    {{--<div class="select-style">--}}
                        {{--<select v-model="filter.priceType" v-on:change="onChangePrice(filter.priceType)">--}}
                            {{--<option value="0">All Prices</option>--}}
                            {{--<option value="1">Free Only</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<button class="btn btn-primary" v-on:click="fetchEvents()">Search</button>--}}
                {{--</div>--}}
            </div>

        </aside>
        <!-- /Sidebar -->
    </div>
</section>
    <!-- /PAGE -->

</div>
<!-- /Content area -->

<!-- FOOTER -->
<footer class="footer">
                <div class="footer-meta footer-meta-alt">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-9 col-sm-6">
                                <ul class="footer-menu">
                                <!--
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Developers</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    -->
                                    <li>Copyright © 2016 <span style="font-weight: bold;">Young Creative Thinker.</span>&nbsp; All right reserved</li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <form action="#" class="country-select">
                                    <div class="form-group">
                                        <select class="selectpicker" data-width="100%">
                                            <option>Select Your Country</option>
                                            <option>Select Your Country</option>
                                            <option>Select Your Country</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
<!-- /FOOTER -->

<div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
        <!-- /Wrap all content -->

        <!-- Popup: Login -->
        <div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">                 
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <div class="form-background">
                    <div class="col-sm-6 popup-form">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Login</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>     
                        <div class="form-footer color">
                            <a href="#" class="popup-password"> Lost your password?</a>                        
                        </div>
                    </div> 

                    <div class="popup-form col-sm-6">
                        <div class="form-header color">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                                <span class="title-inner">Register</span>
                            </h1>
                        </div>
                        <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="E-mail"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                                    </div>
                                </div>                                  
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>                         
                    </div> 

                </div>
            </div>

        </div>
        <!-- /Popup: Login -->

        <!-- JS Global -->

        <!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
        <script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script>
        <script src="assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <script src="assets/plugins/modernizr.custom.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/superfish/js/superfish.js"></script>
        <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/plugins/placeholdem.min.js"></script>
        <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/smooth-scrollbar.min.js"></script>

        <!-- JS Page Level -->
        <script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
        <script src="assets/plugins/waypoints/waypoints.min.js"></script>
        <script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
        <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
        <script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!--<script src="assets/js/theme-ajax-mail.js"></script>-->
        <script src="assets/js/theme.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.js"></script>

        <script src="assets/js/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-strap/1.1.29/vue-strap.js"></script>
        <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>
        <script src="assets/js/vue_modules/scholarship-list.app.js"></script>

        <script type="text/javascript">
            "use strict";
            jQuery(document).ready(function () {
                theme.init();
                theme.initMainSlider();
                theme.initCountDown();
                theme.initPartnerSlider2();
                theme.initImageCarousel();
                theme.initTestimonials();
                theme.initGoogleMap();
            });
            jQuery(window).load(function () {
                theme.initAnimation();
            });

            jQuery(window).load(function () {
                jQuery('body').scrollspy({offset: 100, target: '.navigation'});
            });
            jQuery(window).load(function () {
                jQuery('body').scrollspy('refresh');
            });
            jQuery(window).resize(function () {
                jQuery('body').scrollspy('refresh');
            });

            jQuery(document).ready(function () {
                theme.onResize();
            });
            jQuery(window).load(function () {
                theme.onResize();
            });
            jQuery(window).resize(function () {
                theme.onResize();
            });

            jQuery(window).load(function () {
                if (location.hash != '') {
                    var hash = '#' + window.location.hash.substr(1);
                    if (hash.length) {
                        jQuery('html,body').delay(0).animate({
                            scrollTop: jQuery(hash).offset().top - 44 + 'px'
                        }, {
                            duration: 1200,
                            easing: "easeInOutExpo"
                        });
                    }
                }
            });

        </script>

    </body>

<!-- Mirrored from eazzy.me/html/imevent-multipage/event-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Sep 2016 04:24:01 GMT -->
</html>
