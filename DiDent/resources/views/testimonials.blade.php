@extends('home')
@section('title')
Testimonials
@endsection
@section('template')
       <!--  Main start -->
       <main>
        <!-- You Make Us Better Start -->
        <div class="row make_us_row">
            <div class="container">
                <h1>You Make Us Better</h1>
                <div class="row make_us">
                    <!-- You Make Us Better Item Start -->
                    <div class="col-4 make_us_item">
                        <div class="make_us_item_vn row">
                            <div class="make_us_item_rating">
                                <span>4.9</span>
                                <div class="make_us_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="make_us_item_name">
                                <div class="make_us_item_name_title">Rate on Yelp</div> 
                                <a href="#" class="fayelp"><i class="fa-brands fa-yelp"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- You Make Us Better Item End --> 
                    <!-- You Make Us Better Item Start -->
                    <div class="col-4 make_us_item">
                        <div class="make_us_item_vn row">
                            <div class="make_us_item_rating">
                                <span>4.8</span>
                                <div class="make_us_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="make_us_item_name">
                                <div class="make_us_item_name_title">rate on Google</div> 
                                <a href="#" class="fagoogleplus"><i class="fa-brands fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- You Make Us Better Item End --> 
                    <!-- You Make Us Better Item Start -->
                    <div class="col-4 make_us_item">
                        <div class="make_us_item_vn row">
                            <div class="make_us_item_rating">
                                <span>5.0</span>
                                <div class="make_us_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="make_us_item_name">
                                <div class="make_us_item_name_title">rate on Facebook</div> 
                                <a href="#" class="fafacebook"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- You Make Us Better Item End --> 
                    <!-- You Make Us Better Item Start -->
                    <div class="col-4 make_us_item">
                        <div class="make_us_item_vn row">
                            <div class="make_us_item_rating">
                                <span>3.9</span>
                                <div class="make_us_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star deactivate"></i>
                                </div>
                            </div>
                            <div class="make_us_item_name">
                                <div class="make_us_item_name_title">Average rate</div>
                                <a href="#" class="faglobe"><i class="fa fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- You Make Us Better Item End --> 
                </div>
                
            </div>
        </div>
        <!-- You Make Us Better End -->

        <!-- Recent Testimonials Start -->
        <div class="row recent_testimonials">
            <div class="container">
                <h4>Recent Testimonials</h4>
                <div class="recent_testimonials_row"> 
                @foreach ($rateings as $r)
                    @if ($r->id %2 == 0)
                        <!-- Recent Testimonials Item Start -->
                    <div class="recent_testimonials_item row">
                        <div class="recent_testimonials_item_l"> 
                            <div class="recent_testimonials_title row">
                                <img class="lozad" 
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                data-src="{{ asset($r->profile ?? 'images/default-profile.png') }}" 
                                data-srcset="{{ asset($r->profile ?? 'images/default-profile.png') }} 2x" 
                                alt="{{ $r->name }}" />
                                <div class="recent_testimonials_name">{{$r->name}}</div>
                            </div> 
                            <div class="recent_testimonials_desk">
                                <div class="recent_testimonials_text">
                                    {{$r->description}}
                                </div>
                                <div class="rating_date">
                                    <i class="fa-brands fa-yelp"></i>
                                    {{$r->date}}
                                </div>
                            </div> 
                        </div>
                        <div class="recent_testimonials_item_r">
                            <div class="make_us_item_rating radius_niz">
                                <div class="make_us_item_rating_vn row">
                                    <span>{{$r->rateing}}</span>
                                    <div class="make_us_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Recent Testimonials Item End -->
                        
                    @else
                                           <!-- Recent Testimonials Item Start -->
                    <div class="recent_testimonials_item row">
                        <div class="recent_testimonials_item_l"> 
                            <div class="recent_testimonials_title row">
                                <img class="lozad" 
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                     data-src="{{ asset($r->profile ?? 'images/default-profile.png') }}" 
                                     data-srcset="{{ asset($r->profile ?? 'images/default-profile.png') }} 2x" 
                                     alt="{{ $r->name }}" />
                                <div class="recent_testimonials_name">{{$r->name}}</div>
                            </div>
                            
                            <div class="recent_testimonials_desk">
                                <div class="recent_testimonials_text">
                                    {{$r->description}}
                                </div>
                                <div class="rating_date">
                                    <i class="fa-brands fa-yelp"></i>
                                    {{$r->date}}
                                </div>
                            </div> 
                        </div>
                        <div class="recent_testimonials_item_r">
                            <div class="make_us_item_rating radius_niz">
                                <div class="make_us_item_rating_vn row">
                                    <span>{{$r->rateing}}</span>
                                    <div class="make_us_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star deactivate"></i>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Recent Testimonials Item End --> 
                    @endif
                @endforeach
                   
                    

                    
        
                </div>
            </div>
        </div>
        <!-- Recent Testimonials End -->
        
        <!-- What We Can Offer Start -->
        <div class="row can_offer_row">
            <div class="container">
                <div class="can_offer_title">
                    <i class="dental_icon "><img style="margin-top: 15px;" class="color"  src="{{asset($makeBetter->image)}}"/></i> 
                    <div class="can_offer_title_lite"></div>
                </div>
                <div class="row can_offer_text">
                    <h4>{{$makeBetter->heading}}</h4>
                    <p>{{$makeBetter->description}}</p>
                </div>
            </div>
        </div>
        <!-- What We Can Offer End -->

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
    </main>
    <!--  Main end -->
@endsection