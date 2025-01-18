<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>whitepearl @yield('title')</title>
    <meta name="description" content="DiDent - Dental Clinic HTML Template" />
    <meta name="author" content="http://owl-themes.net/" />
    <meta name="theme-color" content="#1783D3" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('img/favicon_192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/favicon_180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('img/favicon_270x270.png')}}" />
    <style type="text/css">
    .menu nav ul li.active > a {
    color: #007bff; /* Highlighted color */
    /* font-weight: bold; */
    text-decoration: underline;
}
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #FFF;
            text-align: center;
        }

        .preloader_animation {
            width: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .preloader_animation svg {
            animation: heartbeat 1s infinite;
            fill: var(--theme_color);
        }

        @keyframes heartbeat {
            0% {
                transform: scale(0.75);
            }
            20% {
                transform: scale(1);
            }
            40% {
                transform: scale(0.75);
            }
            60% {
                transform: scale(1);
            }
            80% {
                transform: scale(0.75);
            }
            100% {
                transform: scale(0.75);
            }
        }
    </style>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,600%7CSource+Sans+Pro:300,400,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet';this.display='swap'" />
    <script>
        !function (n) {
            "use strict";
            n.loadCSS || (n.loadCSS = function () { });
            var o = loadCSS.relpreload = {};
            if (o.support = function () {
                var e;
                try { e = n.document.createElement("link").relList.supports("preload") }
                catch (t) { e = !1 }
                return function () { return e }
            }(), o.bindMediaToggle = function (t) {
                var e = t.media || "all";
                function a() {
                    t.addEventListener ? t.removeEventListener("load", a) : t.attachEvent && t.detachEvent("onload", a),
                        t.setAttribute("onload", null),
                        t.media = e
                }
                t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a),
                    setTimeout(function () { t.rel = "stylesheet", t.media = "only x" }),
                    setTimeout(a, 3e3)
            }, o.poly = function () {
                if (!o.support())
                    for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                        var a = t[e];
                        "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a.setAttribute("data-loadcss", !0), o.bindMediaToggle(a))
                    }
            }, !o.support()) {
                o.poly();
                var t = n.setInterval(o.poly, 500);
                n.addEventListener ? n.addEventListener("load", function () { o.poly(), n.clearInterval(t) }) : n.attachEvent && n.attachEvent("onload", function () { o.poly(), n.clearInterval(t) })
            }
            "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
        }("undefined" != typeof global ? global : this);
    </script>
    <!-- Include style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Include owl carousel style -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <!-- Include jquery ui -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
    <!-- Include font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Responsive style -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
</head>
<body>
</body>
</html>
 
<body>
    <header>
        <div id="site-header" class="sticky">
            <!-- Header top start -->
            <div class="row header_top">
                <div class="container_1336">
                    <div class="row">
                        <!-- Start clock -->
                        <div class="header_clock">
                            <i class="fa-regular fa-clock"></i>
                            <span>{{$openTime->day1}}</span>
                            <span>{{$openTime->day2}}</span>
                        </div>
                        <!-- End clock -->
                        <!-- Start phone -->
                        <a href="tel:16501234000" class="header_phone">
                            <i class="fa fa-phone"></i>+ {{$hospitalInfo->phone}}
    
                        </a>
                        <!-- End phone -->
                        <!-- Start mail -->
                        <a href="mailto:info@irishwebdesign.com" class="header_mail">
                            <i class="fa fa-envelope"></i>{{$hospitalInfo->email}}
                        </a>
                        <!-- End mail -->
                        <!-- Start address -->
                        <div class="header_address">
                            <i class="fa fa-map-marker"></i> {{$hospitalInfo->location}}
                        </div>
                        <!-- End address -->
                        <!-- Start social button -->
                        <div class="header_social_button">
                            <a target="_blank" href="{{$socialMedia->fb}}"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="{{$socialMedia->tw}}"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="{{$socialMedia->google}}"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a target="_blank" href="{{$socialMedia->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                    
                        </div>
                        <!-- End social button -->
                    </div>
                </div>
            </div>
            <!-- Header top end -->
    
            <!-- Header bottom start -->
            <div class="row header_bottom">
                <div class="container_1336">
                    <div class="row">
                        <!-- LOGO start -->
                        <div class="logo">
                            <a href="{{route('home.page')}}"><img src="{{asset($logo->logo)}}" /></a>
                            
                        </div>
                        <!-- LOGO end -->
    
                        <!-- Headr Button start -->
                        <div class="header_btn">
                            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn_white">Make an Appointment</a></div>
                        </div>
                        <!-- Headr Button end -->
    
                        <!-- NAVIGATION start -->
                        <div class="menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('home.page') }}" data-nav="home1">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about.page') }}" data-nav="about">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service.page') }}" data-nav="services">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('testimonial.page') }}" data-nav="testimonials">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery.page') }}" data-nav="gallery">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.page') }}" data-nav="blog">Blog</a>
                                        {{-- 
                                        <ul>
                                            <li><a href="blog_full_width.php">Blog Full Width</a></li>
                                            <li><a href="blog_grid.php">Blog Grid</a></li>
                                            <li><a href="blog_list.php">Blog List</a></li>
                                            <li><a href="blog_post.php">Blog Post</a></li>
                                        </ul> 
                                        --}}
                                    </li>
                                    <li>
                                        <a href="{{ route('contact.page') }}" data-nav="contact">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                // Get the current URL path
                                const currentPath = window.location.pathname;
                        
                                // Get all navigation links
                                const navLinks = document.querySelectorAll(".menu nav ul li a");
                        
                                // Loop through each link
                                navLinks.forEach(link => {
                                    // Check if the link href matches the current URL path
                                    if (link.href.includes(currentPath)) {
                                        // Add the active class to the parent <li>
                                        link.parentElement.classList.add("active");
                                    } else {
                                        // Remove the active class if it's not the current path
                                        link.parentElement.classList.remove("active");
                                    }
                                });
                            });
                        </script>
                        
    
                        <!-- Mobile Menu start -->
                        <nav class="nav" id="menu_right_sidebar">
                            <div class="menu-right-button open-button"><i class="fa fa-bars"></i></div>
                            <div class="container_right_menu">
                                <span class="close-button"><i class="fa fa-times"></i></span>
                                <div class="row header_menu">
                                    <div class="row logotype_light">
                                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/logo.png" data-srcset="image/logo.png, img/logo_blue@2x.png 2x" alt="DiDent - Dental Clinic HTML Template">
                                    </div>
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <ul class="dl-menu dl-menuopen">
                                            <li>
                                                <a href="{{route('home.page')}}">Home</a>
                                               
                                            </li>
    
                                            <li>
                                                <a href="{{route('about.page')}}">About Us</a>
                                                {{-- <ul class="dl-submenu">
                                                    <li><a href="aboutus.php">About Us Page</a> </li>
                                                    <li><a href="ourdentists.php">Our Dentists</a></li>
                                                    <li><a href="ourstaff.php">Our Staff</a></li>
                                                </ul> --}}
                                            </li>
                                            <li>
                                                <a href="service.php">Services</a>
                                                <ul class="dl-submenu">
                                                    <li><a href="service.php">Service Page</a></li>
                                                    <li><a href="service_page.php">Service Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="testimonials.php">Testimonials</a></li>
                                            <li>
                                                <a href="blog.php">Blog</a>
                                                <ul class="dl-submenu">
                                                    <li><a href="blog.php">Blog Default</a></li>
                                                    <li><a href="blog_full_width.php">Blog Full Width</a></li>
                                                    <li><a href="blog_grid.php">Blog Grid</a></li>
                                                    <li><a href="blog_list.php">Blog List</a></li>
                                                    <li><a href="blog_post.php">Blog Post</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{route('contact.page')}}">Contact Us</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="row footer_item_social">
                                    <a target="_blank" href="{{$socialMedia->fb}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a target="_blank" href="{{$socialMedia->tw}}"><i class="fa-brands fa-twitter"></i></a>
                                    <a target="_blank" href="{{$socialMedia->google}}"><i class="fa-brands fa-google-plus-g"></i></a>
                                    <a target="_blank" href="{{$socialMedia->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                    
                                </div>
                                <div class="row menu_contact">
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i>
                                            <address>27 Castro St, Mountain View, CA 94043</address>
                                        </li>
                                        <li><i class="fa fa-phone"></i> Phone: + 1 650 123-4000</li>
                                        <li><i class="fa fa-envelope-o"></i>info@irishwebdesign.com</li>
                                        <li><i class="fa fa-clock-o"></i> Mon–Fri 10:00 am–6:00 pm</li>
                                        <li><i class="fa fa-clock-o"></i> Sat–Sun 11:00 am– 4:00 pm</li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- Mobile Menu end -->
                    </div>
                </div>
            </div>
            <!-- Header bottom end -->
        </div>
    </header>
    <div class="preloader">
        <div class="preloader_animation">
            <svg id="Layer_1"  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><title>tooth</title><path d="M316.54,550.47q-.36-11.67-.49-23.35c-.32-29.6-3.9-54.78-20.56-80.11C267,403.74,257.7,355.76,259.33,304.82c2.28-71.37,41-119.16,106.45-129.85,27.08-4.43,53.58.75,77.24,13.22,39.56,20.84,77,20.66,116.95.4,36.4-18.44,75.57-21.17,113.88-4,49.7,22.24,68.94,64.74,72.32,115.8,3.4,51.34-5.7,100.28-34.33,144.21-15.55,23.86-22.15,49.18-21.54,78.24,1.56,74.77-2,149.53-26.7,221-7.93,22.95-21.69,44.37-35.56,64.59-8.61,12.55-22.56,22.56-40,16.29-18.35-6.58-21.13-23-24-40Q550.06,703.18,534.28,622c-2.4-12.27-7.56-24.4-13.58-35.43-4-7.3-11.45-14.23-18.13-18.78-26,23.21-34.19,59-40.75,91.83-8.53,42.71-13.64,86.1-20.28,129.19C439.2,804,435,818.11,418.83,824.61s-27.9-2.15-38.31-12.55c-28.2-28.15-41-64.47-47.69-102.06A1109.44,1109.44,0,0,1,316.54,550.47Zm280,246.39c24.2-16.59,33.23-39.12,40.48-62.18,21.11-67.18,26.58-136.72,25.11-206.41-.78-37,7.41-69.24,26-100.65C713.82,384.28,721.42,336.8,714.4,287c-6.48-46-36.84-78.7-82.21-81.59-20.48-1.3-43.19,4.24-62.15,12.78-45.39,20.44-89.11,22.89-133.8-.28-8.25-4.28-17.45-6.93-26.44-9.5-56.13-16.06-106.5,12.85-117.76,70.09-10.35,52.6-3.56,103.36,25.44,149.94,14.71,23.62,25.76,48.14,26.61,77.23,1.51,51.85,3.64,103.8,8.78,155.39,5,50.37,18.57,96.89,53.31,134.69,12.22-24.76,13-56.28,17.8-83.54,5.45-31.19,11.2-62.34,18.55-93.14,5.59-23.39,18.55-46.1,32.5-66.1,14.54-20.84,38.8-20.33,55.17-.66,10.4,12.5,20.06,27.18,24.82,42.51,11.42,36.79,21,74.28,28.92,112C589.9,735.18,592.16,764.35,596.57,796.87Z"/><path d="M373.39,245c24.16,1.24,8.7,24.67,1.95,35a66.12,66.12,0,0,0-10.54,31.47c-1.73,24,5.75,48.89,16.55,70,5.17,10.11,16.85,31.45-1.32,36.23-11.24,3-21.82-11-26.53-19.34-8.17-14.48-12.69-31-15.79-47.19a157.15,157.15,0,0,1,4.49-75.53c3.89-12.67,15.61-30.93,30.59-30.71Z"/></svg>
        </div>
    </div>
    <!-- Wrapper start -->
    <div class="wrapper">
        
        @yield('template')
	</div> 
    <!-- Wrapper End -->
     <!-- Start Contact Us -->
     <div class="contact_map">
        <div class="container">
            <div class="row">
                <h4>Contact Us</h4>
                <div class="contact_map_content">
                    <!-- <iframe class="lozad" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.967410377096!2d-111.89998968453055!3d33.31966746342457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDE5JzEwLjgiTiAxMTHCsDUzJzUyLjEiVw!5e0!3m2!1sen!2sus!4v1516690469899" height="490" style="border:0" allowfullscreen></iframe> -->

                        {!! $iframe->iframe !!}

                    <div class="contact_map_info row">
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Phone</div>
                            <div class="contact_map_info__phone">+ {{$hospitalInfo->phone}}</div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Email</div>
                            <div class="contact_map_info__email">
                                <a href="mailto:info@irishwebdesign.com">{{$hospitalInfo->email}}</a>
                            </div>
                        </div>
                        <div class="contact_map_info__inner">
                            <div class="contact_map_info__title">Address</div>
                            <div class="contact_map_info__address">{{$hospitalInfo->location}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
    
    <!-- Footer start -->
	<footer>
        <div class="svg_blue"> 
            <svg width="100%" height="100%" viewBox="0 0 653 46.107558"><defs><path d="M0 30a1789 1789 0 0 1 653 0v304a1823 1823 0 0 1-653 0z" id="a"/><clipPath  ><path stroke-width="1.00255799" d="M-1-1h656v47H-1z"/></clipPath></defs><use xlink:href="#a" width="100%" height="100%" fill-rule="evenodd"/></svg>
        </div>
        <div class="footer_row background_blue row">
    	    <div class="container">
                <!-- Start top_footer -->
                <div class="top_footer">
                    <!-- Start footer_logo -->
               
                        <a href="{{route('home.page')}}" class="footer_logo">
                            <img src="{{asset($logo->logo)}}" style="width: 120px;color:#FFF" />
                        </a>
                    
                    <!-- End footer_logo -->
                    <!-- Start footer_social_button -->
                    <div class="footer_social_button">
                        <a target="_blank" href="{{$socialMedia->fb}}"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="{{$socialMedia->tw}}"><i class="fa-brands fa-twitter"></i></a>
                        <a target="_blank" href="{{$socialMedia->google}}"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a target="_blank" href="{{$socialMedia->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                
                    </div>
                    <!-- End footer_social_button -->
                </div>
                <!-- End top_footer -->
    
                <!-- Start middle_footer -->
                <div class="middle_footer">
                    <!-- Start contact_info -->
                    <div class="contact_info">
                        <div class="work_time">
                            <i class="fa fa-clock-o"></i>
                            <div class="work_time_inner">
                                <span>{{$openTime->day1}}</span>
                                <span>{{$openTime->day2}}</span>
                            </div>
                        </div>
                        <a href="tel:16501234000"><i class="fa fa-phone"></i>{{$hospitalInfo->phone}}
                        </a>
                        <a href="mailto:info@irishwebdesign.com">
                            <i class="fa fa-envelope"></i>{{$hospitalInfo->email}}
                        </a>
                        <div class="footer_address">
                            <i class="fa fa-map-marker"></i> {{$hospitalInfo->location}}
                        </div>
                    </div>
                    <!-- End contact_info -->
                    <!-- Start footer_menu -->
                    <div class="footer_menu">
                        <a class="footer_see" href="#" onclick="return false"><i class="fa fa-bars"></i> <span>Navigation</span> </a>
                        
                        <div class="row footer_nav">
                            <a class="footer_menu_close" title="Close"><i class="fa fa-times" aria-hidden="true"></i></a>  
                            <div class="col-4">
                                <ul>
                                    <li><a href="{{route('home.page')}}">Home</a></li>
                                    <li><a href="http://dental.owl-themes.net/">Default color</a></li>
                                    <li><a href="http://dental.owl-themes.net/green/">Green color</a></li>
                                    <li><a href="http://dental.owl-themes.net/orange/">Orange color</a></li>
                                    <li><a href="http://dental.owl-themes.net/pink/">Pink color</a></li>
                                    <li><a href="http://dental.owl-themes.net/purple/">Purple color</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><a href="/testimonials.php">Testimonials</a></li>
                                    <li><a href="http://dental.owl-themes.net/documentation/">Element</a></li>
                                    <li><a href="/contact.php">Contact Us</a></li> 
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><a href="{{route('about.page')}}">About Us Page</a></li>
                            		{{-- <li><a href="/ourdentists.php">Our Dentists</a></li>
                                    <li><a href="/ourstaff.php">Our Staff</a></li>
                                    <li><a href="/testimonials.php">Testimonials</a></li> --}}
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>  
                                    <li><a href="/blog.php">Blog Default</a></li>
                                    <li><a href="/blog_full_width.php">Blog Full Width</a></li>
                                    <li><a href="/blog_grid.php">Blog Grid</a></li>
                                    <li><a href="/blog_list.php">Blog List</a></li>
                                    <li><a href="/blog_post.php">Blog Post</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End footer_menu -->
                </div>
                <!-- End middle_footer -->
    
                <!-- Start bottom_footer -->
                <div class="bottom_footer">
                    <div class="bottom_footer_link popup">
                        <a href="#step1" data-effect="mfp-zoom-in" class="step1">Make an Appointment</a>
                        <a href="#">Leave Feedback</a>
                        <a href="#">Write Us</a>
                    </div>
                    <!-- Start copyright -->
                    <div class="copyright">
                    <p><a  style="color:#FF4800;margin-right:5px" target="_blank"
                    href="#">Design & Developed By: Mega Web Link.</a>© 2024 - All Rights Reserved.</p>
                    </div>
                    <!-- End copyright -->
                </div>
                <!-- End bottom_footer -->
            </div>
        </div>
	</footer>
	<!-- Footer end -->       
    
    <!-- Back to top -->
    <div id="back-to-top" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    <!-- Back to top end-->
 
    <form class="fofm">
        <!-- Popup Step 1 -->
        <div id="step1" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Choose a Dentist -->
                <div class="row step1_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Dentist</h3>
                            <div class="row">
                                <!-- Any Dentist -->
                                <input type="radio" id="radio9" class="radio_name" name="radio" value="Any Dentist">
                                <label for="radio9">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="doctor_name">Any Dentist</span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Any Dentist -->

                                <!-- Dr. Katherin Black -->
                                <input type="radio" id="radio1" class="radio_name" name="radio" value="Dr. Katherin Black">
                                <label for="radio1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/dentist_photo_2l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Katherin Black</span>
                                                <span class="doctor_position">Orthodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Katherin Black -->

                                <!-- Dr. Helen Bristen -->
                                <input type="radio" id="radio2" class="radio_name" name="radio" value="Dr. Helen Bristen">
                                <label for="radio2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_3l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Helen Bristen</span>
                                                <span class="doctor_position">General Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Helen Bristen -->

                                <!-- Dr. Michael Johnson -->
                                <input type="radio" id="radio3" class="radio_name" name="radio" value="Dr. Michael Johnson">
                                <label for="radio3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor4.jpg" data-srcset="image/doctor4.jpg, img/main_dentistl@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Michael Johnson</span>
                                                <span class="doctor_position">General and Cosmetic Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Michael Johnson -->


                                <!-- Dr. Brett Armstrong -->
                                <input type="radio" id="radio4" class="radio_name" name="radio" value="Dr. Brett Armstrong">
                                <label for="radio4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor1.jpg" data-srcset="image/doctor1.jpg, img/dentist_photo_4l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Brett Armstrong</span>
                                                <span class="doctor_position">Periodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Brett Armstrong -->

                                <!--  Dr. Jennifer Wilson -->
                                <input type="radio" id="radio5" class="radio_name" name="radio" value=" Dr. Jennifer Wilson">
                                <label for="radio5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/dentist_photo_5l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Jennifer Wilson</span>
                                                <span class="doctor_position">Endodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!--  Dr. Jennifer Wilson -->

                                <!-- Dr. George Wilson -->
                                <input type="radio" id="radio6" class="radio_name" name="radio" value="Dr. George Wilson">
                                <label for="radio6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_1l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. George Wilson</span>
                                                <span class="doctor_position">Dental Surgeon</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. George Wilson -->

                                <!-- Dr. Nicole Green -->
                                <input type="radio" id="radio7" class="radio_name" name="radio" value="Dr. Nicole Green">
                                <label for="radio7">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor4.jpg" data-srcset="image/doctor4.jpg, img/staff_photo_2l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Nicole Green</span>
                                                <span class="doctor_position">Orthodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Nicole Green -->

                                <!-- Dr. John Ridwell -->
                                <input type="radio" id="radio8" class="radio_name" name="radio" value="Dr. John Ridwell">
                                <label for="radio8">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor1.jpg" data-srcset="image/doctor1.jpg, img/staff_photo_1l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. John Ridwell</span>
                                                <span class="doctor_position">General and Cosmetic Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. John Ridwell -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step-next step2">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at +977 {{$hospitalInfo->phone}}
                        <span>© 2024 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Choose a Dentist -->   
            </div> 
        </div>
        <!-- Popup Step 1 -->
        
        <!-- Popup Step 2 -->
        <div id="step2" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Please Provide a Visit Reason -->
                <div class="row step2_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Please Provide a Visit Reason</h3>
                            <div class="row">
                                <!-- Broken Tooth -->
                                <input type="radio" id="radio10" class="radio_service" name="radio_service" value="Broken Tooth">
                                <label for="radio10">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Broken Tooth
                                        </span>
                                    </span>
                                </label>
                                <!-- Broken Tooth -->

                                <!-- Check-up and Cleaning -->
                                <input type="radio" id="radio11" class="radio_service" name="radio_service" value="Check-up and Cleaning">
                                <label for="radio11">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Check-up and Cleaning
                                        </span>
                                    </span>
                                </label>
                                <!-- Check-up and Cleaning -->

                                <!-- Dental Check-up and X-Rays -->
                                <input type="radio" id="radio12" class="radio_service" name="radio_service" value="Dental Check-up and X-Rays">
                                <label for="radio12">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Dental Check-up and X-Rays
                                        </span>
                                    </span>
                                </label>
                                <!-- Dental Check-up and X-Rays -->

                                <!-- General Consultation -->
                                <input type="radio" id="radio13" class="radio_service" name="radio_service" value="General Consultation">
                                <label for="radio13">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            General Consultation
                                        </span>
                                    </span>
                                </label>
                                <!-- General Consultation -->

                                <!-- Jaw Joint Pain -->
                                <input type="radio" id="radio14" class="radio_service" name="radio_service" value="Jaw Joint Pain">
                                <label for="radio14">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Jaw Joint Pain
                                        </span>
                                    </span>
                                </label>
                                <!-- Jaw Joint Pain -->

                                <!-- Teeth Whitening -->
                                <input type="radio" id="radio15" class="radio_service" name="radio_service" value="Teeth Whitening">
                                <label for="radio15">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Teeth Whitening
                                        </span>
                                    </span>
                                </label>
                                <!-- Teeth Whitening -->

                                <!-- Veneers -->
                                <input type="radio" id="radio16" class="radio_service" name="radio_service" value="Veneers">
                                <label for="radio16">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Veneers
                                        </span>
                                    </span>
                                </label>
                                <!-- Veneers -->

                                <!-- Wisdom Teeth Extractions -->
                                <input type="radio" id="radio17" class="radio_service" name="radio_service" value="Wisdom Teeth Extractions">
                                <label for="radio17">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Wisdom Teeth Extractions
                                        </span>
                                    </span>
                                </label>
                                <!-- Wisdom Teeth Extractions -->

                                <!-- Other -->
                                <input type="radio" id="radio18" class="radio_service" name="radio_service" value="Other">
                                <label for="radio18">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Other
                                        </span>
                                    </span>
                                </label>
                                <!-- Other -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step1" class="btn step1">Prev</a>
                        <a href="#step3" class="btn step-next step3">Next</a>
                    </div>
                    <!-- Prev and next step button -->
                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Please Provide a Visit Reason -->
            </div> 
        </div>
        <!-- Popup Step 2 -->
        
        <!-- Popup Step 3 -->
        <div id="step3" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input date -->
                <div class="step3_row datepicker_row row">
                    <div class="datepicker_row_title">
                        <h3>Choose a Date</h3>
                        <div class="btn_white">First Available: Tomorrow at 10:00 am</div>
                    </div>
                    <div class="row datepicker">
                        <div id="datepicker"></div>
                        <input class="reserv_input posDate" id="temp_date_start" type="hidden"  name="posDate">
                    </div>

                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step2">Prev</a>
                        <a href="#step4" class="btn step-next step4">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- End input date -->
            </div> 
        </div>
        <!-- Popup Step 3 -->
        
        <!-- Popup Step 4 -->
        <div id="step4" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input time -->
                <div class="row step4_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Time</h3>
                            <div class="row">
                                <!-- 10:00 am -->
                                <input type="radio" id="radio_time1" class="radio_time" name="radio_time" value="10:00 am">
                                <label for="radio_time1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            10:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 10:00 am -->

                                <!-- 11:00 am -->
                                <input type="radio" id="radio_time2" class="radio_time" name="radio_time" value="11:00 am">
                                <label for="radio_time2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            11:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 11:00 am -->

                                <!-- 12:00 am -->
                                <input type="radio" id="radio_time3" class="radio_time" name="radio_time" value="12:00 am">
                                <label for="radio_time3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            12:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 12:00 am -->

                                <!-- 1:00 am -->
                                <input type="radio" id="radio_time4" class="radio_time" name="radio_time" value="1:00 am">
                                <label for="radio_time4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            1:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 1:00 am -->

                                <!-- 2:00 am -->
                                <input type="radio" id="radio_time5" class="radio_time" name="radio_time" value="2:00 am">
                                <label for="radio_time5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            2:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 2:00 am -->

                                <!-- 3:00 am -->
                                <input type="radio" id="radio_time6" class="radio_time" name="radio_time" value="3:00 am">
                                <label for="radio_time6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            3:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 3:00 am -->

                                <!-- 4:00 am -->
                                <input type="radio" id="radio_time7" class="radio_time" name="radio_time" value="4:00 am">
                                <label for="radio_time7">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            4:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 4:00 am -->

                                <!-- 5:00 am -->
                                <input type="radio" id="radio_time8" class="radio_time" name="radio_time" value="5:00 am">
                                <label for="radio_time8">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            5:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 5:00 am -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step3" class="btn step3">Prev</a>
                        <a href="#step5" class="btn step-next step5">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- end input time -->
            </div> 
        </div>
        <!-- Popup Step 4 -->
    
        <!-- Popup Step 5 -->
        <div id="step5" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Almost There -->
                <div class="row step5_row almost_there">
                    <h3>Almost There!</h3>

                    <div class="row almost_select">
                        <div class="col-3">
                            <div class="almost_select_img radius_right">
                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/dentist_photo_4l.png" data-srcset="img/dentist_photo_4l.png, img/dentist_photo_4l@2x.png 2x" alt="DiDent">
                            </div>
                            <div class="almost_details">
                                <div class="almost_doc_position">Dentist</div>
                                <div class="almost_doc_name">Dr. Jennifer Wilson</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Reason</div>
                                <div class="almost_reason">Check-up and Cleaning</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Date & Time</div>
                                <div class="almost_date">April 19 at 10:00 am</div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="row contact_information_row">
                        <h4>Contact Information</h4>
                        <p>Reach us with your questions. We are looking forward hearing form you!</p>

                        <div class="row form_row">
                            <div class="row row-15">
                                <div class="col-2">
                                    <div class="leable">Full Name</div>
                                    <input class="posName" type="text" name="posName">
                                </div>
                                <div class="col-2">
                                    <div class="leable">Email</div>
                                    <input class="posEmail" type="email" name="posEmail" />
                                </div>
                            </div>
                            <div class="leable">Phone (ex. 650 123-4000)</div>
                            <input class="posTel" type="text" name="posTel"> 
                        </div>

                        <div class="process"></div>
                        <div class="center btn_popup">
                           <a href="#step4" class="btn step4">Prev</a>
                           <button type="button" class="button send">Submit</button>
                        </div> 
                    </div>
                    <!-- Contact Information -->
 
                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Almost There -->
            </div> 
        </div>
        <!-- Popup Step 5 -->
    </form>  
      
    
    <!-- Back to top -->
    <div id="back-to-top" title="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    <!-- Back to top end-->
 
    <form class="fofm">
        <!-- Popup Step 1 -->
        <div id="step1" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Choose a Dentist -->
                <div class="row step1_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Dentist</h3>
                            <div class="row">
                                <!-- Any Dentist -->
                                <input type="radio" id="radio9" class="radio_name" name="radio" value="Any Dentist">
                                <label for="radio9">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="doctor_name">Any Dentist</span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Any Dentist -->

                                <!-- Dr. Katherin Black -->
                                <input type="radio" id="radio1" class="radio_name" name="radio" value="Dr. Katherin Black">
                                <label for="radio1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/dentist_photo_2l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Katherin Black</span>
                                                <span class="doctor_position">Orthodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Katherin Black -->

                                <!-- Dr. Helen Bristen -->
                                <input type="radio" id="radio2" class="radio_name" name="radio" value="Dr. Helen Bristen">
                                <label for="radio2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_3l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Helen Bristen</span>
                                                <span class="doctor_position">General Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Helen Bristen -->

                                <!-- Dr. Michael Johnson -->
                                <input type="radio" id="radio3" class="radio_name" name="radio" value="Dr. Michael Johnson">
                                <label for="radio3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor4.jpg" data-srcset="image/doctor4.jpg, img/main_dentistl@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Michael Johnson</span>
                                                <span class="doctor_position">General and Cosmetic Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Michael Johnson -->


                                <!-- Dr. Brett Armstrong -->
                                <input type="radio" id="radio4" class="radio_name" name="radio" value="Dr. Brett Armstrong">
                                <label for="radio4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor1.jpg" data-srcset="image/doctor1.jpg, img/dentist_photo_4l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Brett Armstrong</span>
                                                <span class="doctor_position">Periodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Brett Armstrong -->

                                <!--  Dr. Jennifer Wilson -->
                                <input type="radio" id="radio5" class="radio_name" name="radio" value=" Dr. Jennifer Wilson">
                                <label for="radio5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/dentist_photo_5l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Jennifer Wilson</span>
                                                <span class="doctor_position">Endodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!--  Dr. Jennifer Wilson -->

                                <!-- Dr. George Wilson -->
                                <input type="radio" id="radio6" class="radio_name" name="radio" value="Dr. George Wilson">
                                <label for="radio6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_1l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. George Wilson</span>
                                                <span class="doctor_position">Dental Surgeon</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. George Wilson -->

                                <!-- Dr. Nicole Green -->
                                <input type="radio" id="radio7" class="radio_name" name="radio" value="Dr. Nicole Green">
                                <label for="radio7">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor4.jpg" data-srcset="image/doctor4.jpg, img/staff_photo_2l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. Nicole Green</span>
                                                <span class="doctor_position">Orthodontist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. Nicole Green -->

                                <!-- Dr. John Ridwell -->
                                <input type="radio" id="radio8" class="radio_name" name="radio" value="Dr. John Ridwell">
                                <label for="radio8">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            <span class="step_item_img radius_right">
                                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor1.jpg" data-srcset="image/doctor1.jpg, img/staff_photo_1l@2x.png 2x" alt="DiDent">
                                            </span>
                                            <span class="step_item_desk">
                                                <span class="doctor_name">Dr. John Ridwell</span>
                                                <span class="doctor_position">General and Cosmetic Dentist</span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                                <!-- Dr. John Ridwell -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step-next step2">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Choose a Dentist -->   
            </div> 
        </div>
        <!-- Popup Step 1 -->
        
        <!-- Popup Step 2 -->
        <div id="step2" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Please Provide a Visit Reason -->
                <div class="row step2_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Please Provide a Visit Reason</h3>
                            <div class="row">
                                <!-- Broken Tooth -->
                                <input type="radio" id="radio10" class="radio_service" name="radio_service" value="Broken Tooth">
                                <label for="radio10">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Broken Tooth
                                        </span>
                                    </span>
                                </label>
                                <!-- Broken Tooth -->

                                <!-- Check-up and Cleaning -->
                                <input type="radio" id="radio11" class="radio_service" name="radio_service" value="Check-up and Cleaning">
                                <label for="radio11">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Check-up and Cleaning
                                        </span>
                                    </span>
                                </label>
                                <!-- Check-up and Cleaning -->

                                <!-- Dental Check-up and X-Rays -->
                                <input type="radio" id="radio12" class="radio_service" name="radio_service" value="Dental Check-up and X-Rays">
                                <label for="radio12">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Dental Check-up and X-Rays
                                        </span>
                                    </span>
                                </label>
                                <!-- Dental Check-up and X-Rays -->

                                <!-- General Consultation -->
                                <input type="radio" id="radio13" class="radio_service" name="radio_service" value="General Consultation">
                                <label for="radio13">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            General Consultation
                                        </span>
                                    </span>
                                </label>
                                <!-- General Consultation -->

                                <!-- Jaw Joint Pain -->
                                <input type="radio" id="radio14" class="radio_service" name="radio_service" value="Jaw Joint Pain">
                                <label for="radio14">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Jaw Joint Pain
                                        </span>
                                    </span>
                                </label>
                                <!-- Jaw Joint Pain -->

                                <!-- Teeth Whitening -->
                                <input type="radio" id="radio15" class="radio_service" name="radio_service" value="Teeth Whitening">
                                <label for="radio15">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Teeth Whitening
                                        </span>
                                    </span>
                                </label>
                                <!-- Teeth Whitening -->

                                <!-- Veneers -->
                                <input type="radio" id="radio16" class="radio_service" name="radio_service" value="Veneers">
                                <label for="radio16">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Veneers
                                        </span>
                                    </span>
                                </label>
                                <!-- Veneers -->

                                <!-- Wisdom Teeth Extractions -->
                                <input type="radio" id="radio17" class="radio_service" name="radio_service" value="Wisdom Teeth Extractions">
                                <label for="radio17">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Wisdom Teeth Extractions
                                        </span>
                                    </span>
                                </label>
                                <!-- Wisdom Teeth Extractions -->

                                <!-- Other -->
                                <input type="radio" id="radio18" class="radio_service" name="radio_service" value="Other">
                                <label for="radio18">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            Other
                                        </span>
                                    </span>
                                </label>
                                <!-- Other -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step1" class="btn step1">Prev</a>
                        <a href="#step3" class="btn step-next step3">Next</a>
                    </div>
                    <!-- Prev and next step button -->
                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Please Provide a Visit Reason -->
            </div> 
        </div>
        <!-- Popup Step 2 -->
        
        <!-- Popup Step 3 -->
        <div id="step3" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input date -->
                <div class="step3_row datepicker_row row">
                    <div class="datepicker_row_title">
                        <h3>Choose a Date</h3>
                        <div class="btn_white">First Available: Tomorrow at 10:00 am</div>
                    </div>
                    <div class="row datepicker">
                        <div id="datepicker"></div>
                        <input class="reserv_input posDate" id="temp_date_start" type="hidden"  name="posDate">
                    </div>

                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step2" class="btn step2">Prev</a>
                        <a href="#step4" class="btn step-next step4">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- End input date -->
            </div> 
        </div>
        <!-- Popup Step 3 -->
        
        <!-- Popup Step 4 -->
        <div id="step4" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Start input time -->
                <div class="row step4_row">
                    <div class="prod_checbox">
                        <div class="radio-toolbar">
                            <h3>Choose a Time</h3>
                            <div class="row">
                                <!-- 10:00 am -->
                                <input type="radio" id="radio_time1" class="radio_time" name="radio_time" value="10:00 am">
                                <label for="radio_time1">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            10:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 10:00 am -->

                                <!-- 11:00 am -->
                                <input type="radio" id="radio_time2" class="radio_time" name="radio_time" value="11:00 am">
                                <label for="radio_time2">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            11:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 11:00 am -->

                                <!-- 12:00 am -->
                                <input type="radio" id="radio_time3" class="radio_time" name="radio_time" value="12:00 am">
                                <label for="radio_time3">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            12:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 12:00 am -->

                                <!-- 1:00 am -->
                                <input type="radio" id="radio_time4" class="radio_time" name="radio_time" value="1:00 am">
                                <label for="radio_time4">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            1:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 1:00 am -->

                                <!-- 2:00 am -->
                                <input type="radio" id="radio_time5" class="radio_time" name="radio_time" value="2:00 am">
                                <label for="radio_time5">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            2:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 2:00 am -->

                                <!-- 3:00 am -->
                                <input type="radio" id="radio_time6" class="radio_time" name="radio_time" value="3:00 am">
                                <label for="radio_time6">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            3:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 3:00 am -->

                                <!-- 4:00 am -->
                                <input type="radio" id="radio_time7" class="radio_time" name="radio_time" value="4:00 am">
                                <label for="radio_time7">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            4:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 4:00 am -->

                                <!-- 5:00 am -->
                                <input type="radio" id="radio_time8" class="radio_time" name="radio_time" value="5:00 am">
                                <label for="radio_time8">
                                    <span class="step_item_vn">
                                        <span class="row step_item align-items-center">
                                            5:00 am
                                        </span>
                                    </span>
                                </label>
                                <!-- 5:00 am -->
                            </div>
                        </div>
                    </div>
                    <!-- Prev and next step button -->
                    <div class="center btn_popup">
                        <a href="#step3" class="btn step3">Prev</a>
                        <a href="#step5" class="btn step-next step5">Next</a>
                    </div>
                    <!-- Prev and next step button -->

                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- end input time -->
            </div> 
        </div>
        <!-- Popup Step 4 -->
    
        <!-- Popup Step 5 -->
        <div id="step5" class="white-popup mfp-with-anim mfp-hide order_popup">
            <div class="popup_content">
                <!-- Almost There -->
                <div class="row step5_row almost_there">
                    <h3>Almost There!</h3>

                    <div class="row almost_select">
                        <div class="col-3">
                            <div class="almost_select_img radius_right">
                                <img class="lozad is-loaded" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/dentist_photo_4l.png" data-srcset="img/dentist_photo_4l.png, img/dentist_photo_4l@2x.png 2x" alt="DiDent">
                            </div>
                            <div class="almost_details">
                                <div class="almost_doc_position">Dentist</div>
                                <div class="almost_doc_name">Dr. Jennifer Wilson</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Reason</div>
                                <div class="almost_reason">Check-up and Cleaning</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="almost_details">
                                <div class="almost_title">Date & Time</div>
                                <div class="almost_date">April 19 at 10:00 am</div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="row contact_information_row">
                        <h4>Contact Information</h4>
                        <p>Reach us with your questions. We are looking forward hearing form you!</p>

                        <div class="row form_row">
                            <div class="row row-15">
                                <div class="col-2">
                                    <div class="leable">Full Name</div>
                                    <input class="posName" type="text" name="posName">
                                </div>
                                <div class="col-2">
                                    <div class="leable">Email</div>
                                    <input class="posEmail" type="email" name="posEmail" />
                                </div>
                            </div>
                            <div class="leable">Phone (ex. 650 123-4000)</div>
                            <input class="posTel" type="text" name="posTel"> 
                        </div>

                        <div class="process"></div>
                        <div class="center btn_popup">
                           <a href="#step4" class="btn step4">Prev</a>
                           <button type="button" class="button send">Submit</button>
                        </div> 
                    </div>
                    <!-- Contact Information -->
 
                    <!-- footer popup -->
                    <div class="footer_popup">
                        If you need immediate assistance, please call us at + 1 650 123-4000
                        <span>© 2019 DiDent. All Rights Reserved</span>
                    </div>
                    <!-- footer popup -->
                </div>
                <!-- Almost There -->
            </div> 
        </div>
        <!-- Popup Step 5 -->
    </form> 

<!-- JS -->

<script src="{{ asset('js/compress/modernizr.custom.js') }}"></script>
<!-- Jquery -->
<script src="{{ asset('js/compress/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('js/compress/jquery-ui.js') }}"></script>
<script async src="{{ asset('js/compress/jquery.viewportchecker.js') }}"></script>
<!-- Sidebar menu -->
<script src="{{ asset('js/compress/jquery.dlmenu.js') }}"></script>
<!-- Image lazy load -->
<script src="{{ asset('js/compress/lozad.js') }}"></script>
<!-- Owl carousel -->
<script async src="{{ asset('js/compress/owl.carousel.js') }}"></script>
<!-- Magnific-popup js -->
<script async src="{{ asset('js/compress/jquery.magnific-popup.js') }}"></script>
<!-- After-Before Script -->
<script async src="{{ asset('js/compress/jquery.event.move.js') }}"></script>
<script src="{{ asset('js/compress/jquery.twentytwenty.js') }}"></script>
<!-- Custom JS -->
<script async src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
