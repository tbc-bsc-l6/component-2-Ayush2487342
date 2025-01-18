@extends('home')

@section('template')


<div class="overflow_hidden">
    <div class="radius_niz_mini"> 
        <div class="slideshow owl-carousel owl-theme">
            <!-- Start slideshow item -->
            <div class="item">
                <div class="row slideshow_heding">
                    <div class="slideshow-image lozad" data-background-image="image/slide2.jpg" id="slide1"></div>
                    <h4>We Create Your<br />Healthy Smiles</h4>
                    <div class="slideshow_info_block">With latest technologies and best doctors in industry</div>
                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                </div>
            </div>
            <!-- End slideshow item -->
            <!-- Start slideshow item -->
            <div class="item">
                <div class="row slideshow_heding">
                    <div class="slideshow-image lozad" data-background-image="image/slide.jpg" id="slide2"></div>
                    <h4>Best Whitening<br />in Mountain View</h4>
                    <div class="slideshow_info_block">Get your perfect smile with best specialists in service</div>
                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                </div>
            </div>
            <!-- End slideshow item -->
            <!-- Start slideshow item -->
            <div class="item">
                <div class="row slideshow_heding">
                    <div class="slideshow-image lozad" data-background-image="image/slide2.jpg" id="slide3"></div>
                    <h4>Happy Kids with<br />Healthy Theeth</h4>
                    <div class="slideshow_info_block">We bring dental care for patients of all ages</div>
                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                </div>
            </div>
            <!-- End slideshow item -->
        </div> 
    </div>
</div> 
<!--  Header slideshow end -->

<!--  Main start -->
<main>
    <!-- Service start -->
    <div class="row services">
        <div class="overflow_hidden">
            <div class="radius_row_niz services_row">
                <div class="container">
                    <div class="row row-15">

                        <!-- Service item end -->
                        <!-- Service item start -->
                        @foreach ($serviceLists as $sl)
                        <a href="{{route('service.page')}}" class="services_item">
                            <span class="services_item_title">{{$sl->heading}}</span>
                            <span class="services_item_desc">{{$sl->items}}</span>
                            <i class="dental_icon "><img class="color" src="image/002-dental-implant.png"/></i>
                        </a>
                        @endforeach

                        <!-- Service item end -->
                    
                        <!-- Service item end -->
                    </div>
                    <div class="view_servises">
                        <a href="{{route('service.page')}}" class="more">View all servises</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service end -->

    <!-- Video start -->
@if(!empty($videoURL->video))
<div class="row video">
    <div class="container">
        <!-- Dynamically load the video URL -->
        <iframe 
            style="border:0;" 
            height="535" 
            class="lozad video-iframe" 
            data-src="{{ $videoURL->video }}" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>
</div>
@else
<p>No video URL provided.</p>
@endif
<!-- Video end -->

    <!-- About start -->
    <div class="container about">
        <div class="row">
            <!-- About left col start -->
            <div class="col-2 about_left">
                <div class="row">
                    <h4>{{$clinic->heading}}</h4>
                    <div class="about_left_h2">
                        {{$clinic->description}}
                    </div>
                    <div class="about_left_text">
                        {!! $clinic->paragraph !!}                    
                    </div>
                    <a class="more">Learn more</a>
                    <!-- Advantages start -->
                    <div class="row advantages">
                        @foreach ($aboutExperience as $ae)
                          @if ($ae->status==1)
                          <div class="advantages_item"> 
                            <strong>{{$ae->from}}</strong>
                            <span>{{$ae->to}}</span> 
                        </div>  
                          @endif  
                        
                        @endforeach

                    </div>
                    <!-- Advantages end -->
                </div>
            </div>
            <!-- About left col end -->


            <!-- About right col start -->
            <div class="col-2 about_right">
                <!-- About image start -->
                <div class="row about_image">
                    <!-- About image left col start -->
<div class="col-2 about_image_left">
    @if(!empty($aboutRightImage->image1))
        <img class="lozad" src="{{ asset($aboutRightImage->image1) }}" alt="Image 1" />
    @endif
    @if(!empty($aboutRightImage->image2))
        <img class="lozad" src="{{ asset($aboutRightImage->image2) }}" alt="Image 2" />
    @endif
</div>
<!-- About image left col end -->

<!-- About image right col start -->
<div class="col-2 about_image_right">
    @if(!empty($aboutRightImage->image3))
        <img class="lozad" src="{{ asset($aboutRightImage->image3) }}" alt="Image 3" />
    @endif
    @if(!empty($aboutRightImage->image4))
        <img class="lozad" src="{{ asset($aboutRightImage->image4) }}" alt="Image 4" />
    @endif
</div>
<!-- About image right col end -->
                </div>
                <!-- About image end -->
            </div>
            <!-- About right col end -->
        </div>
    </div>
    <!-- About end -->

    <!-- Certificates start -->
    <div class="row certificates">
        <div class="container row">
            <h4>Certificates & Associations</h4>
            <div class="navigation"></div>
        </div>
        <div class="owl_certificates owl-carousel owl-theme gallery">

            @foreach ($ca as $cas)
                @if ($cas->status==1)
                <div class="item">
                    <a href="{{ asset($cas->image) }}">
                        <img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($cas->image) }}" alt="DiDent" />
                    </a>
                </div>
                @endif
            @endforeach


            
        </div>
    </div>
    <!-- Certificates end -->

    <!-- Start Dentists Tabs -->
    <div id="dentists">
        <!-- Start Dentists Tabs Container -->
        <div class="container">
            <div class="row tabs">
                <!-- Start Dentists Tabs Title Left Col -->
                <div class="tabs_l row">
                    <h4>Dentists</h4>
                    <ul>
                        <li><a href="#tab1">Dr. George Whilson</a></li>
                        <li><a href="#tab2">Dr. Michael Johnson</a></li>
                        <li><a href="#tab3">Dr. Katherin Black</a></li>
                        <li><a href="#tab4">Dr. Helen Bristen</a></li>
                    </ul>
                    <a class="more">View all</a>
                </div>
                <!-- End Dentists Tabs Title -->

                <!-- Start Dentists Tabs Title Left Col -->
                <div class="tabs_r">
                    <!-- Start tab1 content -->
                    <div class="tab_content" id="tab1">
                        <div class="row">
                            <div class="tab_content_l col-2">
                                <a href="#" class="tab_content_name">Dr. George Whilson</a>
                                <div class="tab_content_profession">Orthodontist</div>
                                <div class="tab_content_desk">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                            <div class="tab_content_r col-2">
                                <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor.jpg" data-srcset="image/doctor.jpg, img/dentist_photo_1@2x.png 2x" alt="DiDent" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End tab1 content -->

                    <!-- Start tab2 content -->
                    <div class="tab_content" id="tab2">
                        <div class="row">
                            <div class="tab_content_l col-2">
                                <a href="#" class="tab_content_name">Dr. Michael Johnson</a>
                                <div class="tab_content_profession">Orthodontist</div>
                                <div class="tab_content_desk">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                            <div class="tab_content_r col-2">
                                <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor.jpg" data-srcset="image/doctor.jpg, img/dentist_photo_2@2x.png 2x" alt="DiDent" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End tab2 content -->

                    <!-- Start tab3 content -->
                    <div class="tab_content" id="tab3">
                        <div class="row">
                            <div class="tab_content_l col-2">
                                <a href="#" class="tab_content_name">Dr. Katherin Black</a>
                                <div class="tab_content_profession">Orthodontist</div>
                                <div class="tab_content_desk">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                            <div class="tab_content_r col-2">
                                <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor.jpg" data-srcset="image/doctor.jpg, img/dentist_photo_3@2x.png 2x" alt="DiDent" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End tab3 content -->

                    <!-- Start tab4 content -->
                    <div class="tab_content" id="tab4">
                        <div class="row">
                            <div class="tab_content_l col-2">
                                <a href="#" class="tab_content_name">Dr. Helen Bristen</a>
                                <div class="tab_content_profession">Orthodontist</div>
                                <div class="tab_content_desk">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </div>
                            <div class="tab_content_r col-2">
                                <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor.jpg" data-srcset="image/doctor.jpg, img/dentist_photo_4@2x.png 2x" alt="DiDent" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End tab4 content -->
                </div>
                <!-- End Dentists Tabs Title Left Col -->
            </div>
        </div>
        <!-- End Dentists Tabs Container -->
    </div>
    <!-- End Dentists Tabs -->

    <!-- Start Brands -->
    <div class="brands">
        <div class="container">
            <div class="row brands_title">We Accept Dental Insurance</div>
            <div class="row brands_item">
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_1.png" alt="DiDent" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_2.png" alt="DiDent" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_3.png" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_4.png" alt="DiDent" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_5.png" alt="DiDent" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_6.png" alt="DiDent" /></a>
                <a href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://dental.owl-themes.net/img/brands_7.png" alt="DiDent" /></a>
            </div>
        </div>
        <div class="row brands_desc">
            <strong>Don’t have an insurance? No problem!</strong>
            Just contact our team and we will find a solution suitable for you
        </div>
    </div>
    <!-- End Brands -->

    <!-- Start Testimonials -->
    <div class="testimonials"> 
        <div class="row">
            <div class="row testimonials_title">
                <div class="container">
                    <div class="row testimonials_title_row">
                        <div class="col-2 testimonials_title_l">
                            <h3>Testimonials</h3>
                        </div>
                        <div class="col-2 testimonials_title_r">
                            <a href="#" class="btn_transparent">Leave Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl_testimonials owl-carousel owl-theme"> 
                <!-- Start Testimonials Item-->
                @foreach ($rateings as $rateing)
                <div class="item">
                    <div class="slideshow-image">
                        <img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                             data-src="https://dental.owl-themes.net/img/story_avatar_1.png" 
                             alt="DiDent">
                    </div> 
                    <div class="ale_bg_overlay" style="background-color: rgba(0,0,0,0.20)"></div>
                    <div class="container">
                        <div class="row owl_testimonials_top">
                            <div class="owl_testimonials_top_img">
                                <!-- Check if the profile image exists, otherwise show a default image -->
                                <img class="lozad" 
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                     data-src="{{ asset($rateing->profile ?? 'images/default-profile.png') }}" 
                                     data-srcset="{{ asset($rateing->profile ?? 'images/default-profile.png') }} 2x" 
                                     alt="{{ $rateing->name }}" />
                            </div>
                            
                            <div class="owl_testimonials_top_r">
                                <div class="owl_testimonials_top_r_name">{{ $rateing->name }}</div>
                                <div class="rating">
                                    @php
                                        $rating = $rateing->rateing; // Get the rating value
                                        $fullStars = floor($rating); // Get the full stars (integer part)
                                        $halfStar = ($rating - $fullStars) >= 0.5 ? true : false; // Check if there's a half star
                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0); // Calculate the empty stars
                                    @endphp
                                    
                                    @for ($i = 0; $i < $fullStars; $i++)
                                        <i class="fa fa-star"></i> <!-- Full Star -->
                                    @endfor
                                    
                                    @if ($halfStar)
                                        <i class="fa fa-star-half-alt"></i> <!-- Half Star -->
                                    @endif
                                    
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <i class="fa fa-star-o"></i> <!-- Empty Star -->
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="row owl_testimonials_text">
                            {{ $rateing->description }}
                        </div>
                        <div class="rating_date">
                            <i class="fa-brands fa-yelp"></i>
                            {{ $rateing->date }}
                        </div>
                    </div>
                </div>
            @endforeach
            
                <!-- End Testimonials Item -->  
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Get Service -->
    <div class="row get_service">
        <div class="container">
            <h4>Get the best service in your city</h4>
            <p style="color: #FFF;">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
        </div>
    </div>
    <!-- End Get Service -->

    <!-- Start Recent News -->
    <div class="row news">
        <div class="container">
            <h4>Recent News</h4>
            <div class="row row-15">
                @foreach ($recentNews as $rn)
                    
                <div class="col-3 news_item">
                    <div class="news_item_vn">
                        <a href="#" class="radius_niz">
                            <img 
                                class="lozad" 
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                data-src="{{ $rn->image }}" 
                                data-srcset="{{ $rn->image }}" 
                                alt="{{ $rn->heading }}" 
                            />
                        </a>
                        <div class="news_item_content">
                            <a href="/blog_post.php" class="news_item_content_title">{{$rn->heading}}</a>
                            <div class="news_item_content_date">{{$rn->date}}</div>
                            <div class="news_item_content_desk">
                                {{$rn->description}}
                            </div>
                            <a href="#" class="more">Learn more</a>
                        </div>
                    </div>
                </div>
                <!-- End Recent News Item -->
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- End Recent News --> 
</main>
<!--  Main end -->
@endsection