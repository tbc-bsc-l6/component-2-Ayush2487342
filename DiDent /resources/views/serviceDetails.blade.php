@extends('home')

@section('title')
    Service Deatils
@endsection

@section('template')
            <!--  Main start -->
            <main>
                <!-- Service block top start -->
                <div class="row header_row">
                    <div class="container">
                        <div class="row header_title">
                            <div class="header_title_content">
                                <h1>{{$serviceDetails->heading}}</h1>
                                <p>{{$serviceDetails->description}}</p>
                                <div class="header_tag">
                                    <a href="#prices" class="skrolurl">Veneers</a>
                                    <a href="#prices" class="skrolurl">Whitening</a>
                                    <a href="#prices" class="skrolurl">Bonding</a>
                                    <a href="#prices" class="skrolurl">Fillings</a>
                                    <a href="#prices" class="skrolurl">Implants</a>
                                    <a href="#prices" class="skrolurl">Crowns</a>
                                    <a href="#prices" class="skrolurl">Bridges</a>
                                    <a href="#prices" class="skrolurl">Onlays</a>
                                    <a href="#prices" class="skrolurl">Inlays</a>
                                </div>
                            </div>
                            <div class="header_i"><i class="dental_icon "><img style="width: 45%;margin-left:55%" src="{{asset('storage/'.$serviceDetails->logo)}}" /></i></div>
                        </div>
                    </div>
                </div>
                <!-- Service block top end -->
    
    
                <!-- Presentation Start -->
                <div class="row gallery presentation_row">
                    <div class="presentation_fon">
                        <div class="block_color_blue radius_niz_mini"></div>
                    </div>
                    <div class="row presentation_gallery">
                        <div class="container">
                            <div class="row presentation_gallery_row">
                                <h4>Presentation</h4>
                                <div class="navigation"></div>
                            </div>
                            <div class="presentation_carusel">
                                <div class="presentation_title">Cosmetic Dentstry of New Generation</div>
                                <div class="row presentation_carusel_vn">
                                    <div class="owl_presentation owl-carousel owl-theme">
                                        @foreach ($gallery as $g)
                                        <div class="item"><img class="owl-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($g->image) }}" alt="DiDent" /></div>

                                        @endforeach
                                 
                                    </div>
                                    <div class="carousel_counter"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Presentation End -->
    
                <!-- Live Stories Start -->
                <div class="row stories">
                    <div class="container">
                        <div class="row stories_title">
                            <h4>Live Stories</h4>
                            <div class="stories_desk">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in repre velit esse cillum dolore.
                            </div>
                        </div>
                        <!-- Stories Item Start -->
                        <div class="row stories_item">
                            <div class="radius_line">
                                <div class="radius_line_vn"></div>
                            </div>
                            <!-- Stories Item Autor Start -->
                            <div class="stories_item_number"><span>1</span></div>
                            <div class="row stories_item_details">
                                <div class="stories_avatar"><img style="border-radius: 10%;width:10%" class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/story_avatar_1@2x.png 2x" alt="DiDent" /></div>
                                <div class="stories_name">Jennifer White</div>
                                <div class="stories_date">26 years old, SF</div>
                            </div>
                            <!-- Stories Item Autor End -->
                            <!-- Stories Item Descriptions Start -->
                            <div class="row stories_item_desk">
                                <div class="col-2 stories_deck_row_item">
                                    <i class="dental_icon "><img style="padding-top: 7px;" class="color" src="image/search.png" /></i>
                                    <div class="row stories_list_row">
                                        <div class="stories_list_title">
                                            <h5>Initial problem</h5>
                                        </div>
                                        <div class="row stories_deck_row_item_desk">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea enim ad minim commodo consequat. </p>
                                        </div>
                                        <div class="line_arrow_bottom">
                                            <div class="lihe_heading"></div>
                                            <i class="dental_icon dentalic_arrow_down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 stories_deck_row_item">
                                    <i class="dental_icon "><img class="color" src="image/lightbulb.png" /></i>
                                    <div class="row stories_list_row">
                                        <div class="stories_list_title">
                                            <h5>What we’ve done</h5>
                                        </div>
                                        <div class="row stories_deck_row_item_desk">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Stories Item Descriptions End -->
                            <!-- Stories Item After Before Start -->
                            <div class="after_before_row overflow_hidden">
                                <h4>Results</h4>
                                <div class="radius_mini">
                                    <div class="twentytwenty-container">
                                        <!-- The before image is first -->
                                        <img src="https://dental.owl-themes.net/img/img_smile_before_1l.png" alt="DiDent" />
                                        <!-- The after image is last -->
                                        <img src="https://dental.owl-themes.net/img/img_smile_before_1r.png" alt="DiDent" />
                                    </div>
                                </div>
                            </div>
                            <!-- Stories Item After Before End -->
                        </div>
                        <!-- Stories Item End -->
                    </div>
                </div>
                <!-- Live Stories End -->
    
                <!-- Live Stories Start -->
                <div class="row stories">
                    <div class="container">
                        <!-- Stories Item Start -->
                        <div class="row stories_item">
                            <div class="radius_line">
                                <div class="radius_line_vn"></div>
                            </div>
                            <!-- Stories Item Autor Start -->
                            <div class="stories_item_number"><span>2</span></div>
                            <div class="row stories_item_details">
                                <div class="stories_avatar"><img style="border-radius: 10%;width:10%" class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/story_avatar_2@2x.png 2x" alt="DiDent" /></div>
                                <div class="stories_name">Kate Washington</div>
                                <div class="stories_date">34 years old, SF</div>
                            </div>
                            <!-- Stories Item Autor End -->
                            <!-- Stories Item Descriptions Start -->
                            <div class="row stories_item_desk">
                                <div class="col-2 stories_deck_row_item">
                                    <i class="dental_icon "><img style="padding-top: 7px;" class="color" src="image/search.png" /></i>
                                    <div class="row stories_list_row">
                                        <div class="stories_list_title">
                                            <h5>Initial problem</h5>
                                        </div>
                                        <div class="row stories_deck_row_item_desk">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea enim ad minim commodo consequat. </p>
                                        </div>
                                        <div class="line_arrow_bottom">
                                            <div class="lihe_heading"></div>
                                            <i class="dental_icon dentalic_arrow_down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 stories_deck_row_item">
                                    <i class="dental_icon "><img class="color" src="image/lightbulb.png" /></i>
                                    <div class="row stories_list_row">
                                        <div class="stories_list_title">
                                            <h5>What we’ve done</h5>
                                        </div>
                                        <div class="row stories_deck_row_item_desk">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Stories Item Descriptions End -->
                            <!-- Stories Item After Before Start -->
                            <div class="after_before_row overflow_hidden">
                                <h4>Results</h4>
                                <div class="radius_mini">
                                    <div class="twentytwenty-container ">
                                        <!-- The before image is first -->
                                        <img src="https://dental.owl-themes.net/img/img_smile_before_1r.png" alt="DiDent" />
                                        <!-- The after image is last -->
                                        <img src="https://dental.owl-themes.net/img/img_smile_before_2r.png" alt="DiDent" />
                                    </div>
                                </div>
                            </div>
                            <!-- Stories Item After Before End -->
                        </div>
                        <!-- Stories Item End -->
                    </div>
                </div>
                <!-- Live Stories End -->
    
    
    
    
    
                <!-- Start Specialists -->
                <div class="specialists" id="specialists">
                    <!-- Start Best Specialists Container -->
                    <div class="container">
                        <h4>Our Specialists in Cosmetic Dentistry</h4>
                        <div class="row">
                            <!-- Start doctor item -->
                            <div class="row specialists_row">
                                <div class="special_img col-2">
                                    <a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor2.jpg" data-srcset="image/doctor2.jpg, img/dentist_photo_6@2x.png 2x" alt="DiDent" /></a>
                                </div>
                                <div class="special_desk col-2">
                                    <div class="special_desk_title_row row">
                                        <div class="special_desk_title">
                                            <a href="#" class="special_desk_name">Dr. Michael Johnson</a>
                                            <div class="special_desk_profession">Periodontists</div>
                                        </div>
                                        <div class="special_desk_soc">
                                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' src='image/cap.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Education</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>University of Iowa</li>
                                                    <li>CAD/CAM Certified</li>
                                                    <li>Invisalign Certified</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style=" padding-top:5px" src='image/file.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Membership</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>American Dental Association</li>
                                                    <li>California Dental Association</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style="padding-top:5px" src='image/chat.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Languages</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>English</li>
                                                    <li>German</li>
                                                    <li>Italian</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor text -->
                                    <div class="special_desk_desk row">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab oris nisi ut aliquip ex ea comdo consequat. Duis aute irure dolor in reprehenderit in volupt ate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.
                                    </div>
                                    <!-- End doctor text -->
                                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
                                </div>
                            </div>
                            <!-- End doctor item -->
                            <!-- Start doctor item -->
                            <div class="row specialists_row">
                                <div class="special_img col-2">
                                    <a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_2@2x.png 2x" alt="DiDent" /></a>
                                </div>
                                <div class="special_desk col-2">
                                    <div class="special_desk_title_row row">
                                        <div class="special_desk_title">
                                            <a href="#" class="special_desk_name">Dr. Katherin Black</a>
                                            <div class="special_desk_profession">Periodontists</div>
                                        </div>
                                        <div class="special_desk_soc">
                                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon"><img class='color' src='image/cap.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Education</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>University of Iowa</li>
                                                    <li>CAD/CAM Certified</li>
                                                    <li>Invisalign Certified</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style=" padding-top:5px" src='image/file.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Membership</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>American Dental Association</li>
                                                    <li>California Dental Association</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style="padding-top:5px" src='image/chat.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Languages</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>English</li>
                                                    <li>German</li>
                                                    <li>Italian</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor text -->
                                    <div class="special_desk_desk row">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nes. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore quaerat voluptatem.
                                    </div>
                                    <!-- End doctor text -->
                                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
                                </div>
                            </div>
                            <!-- End doctor item -->
                            <!-- Start doctor item -->
                            <div class="row specialists_row">
                                <div class="special_img col-2">
                                    <a class="radius_right" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/doctor3.jpg" data-srcset="image/doctor3.jpg, img/dentist_photo_3@2x.png 2x" alt="DiDent" /></a>
                                </div>
                                <div class="special_desk col-2">
                                    <div class="special_desk_title_row row">
                                        <div class="special_desk_title">
                                            <a href="#" class="special_desk_name">Dr. Helen Bristen</a>
                                            <div class="special_desk_profession">Periodontists</div>
                                        </div>
                                        <div class="special_desk_soc">
                                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' src='image/cap.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Education</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>University of Iowa</li>
                                                    <li>CAD/CAM Certified</li>
                                                    <li>Invisalign Certified</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style="padding-top:5px" src='image/file.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Membership</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>American Dental Association</li>
                                                    <li>California Dental Association</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor list -->
                                    <div class="special_desk_service row">
                                        <div class="special_desk_service_icon">
                                            <i class="dental_icon "><img class='color' style="padding-top:5px" src='image/chat.png' /></i>
                                        </div>
                                        <div class="special_desk_service_r">
                                            <div class="special_desk_service_title">Languages</div>
                                            <div class="row special_desk_service_list">
                                                <ul>
                                                    <li>English</li>
                                                    <li>German</li>
                                                    <li>Italian</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End doctor list -->
                                    <!-- Start doctor text -->
                                    <div class="special_desk_desk row">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab oris nisi ut aliquip ex ea comdo consequat. Duis aute irure dolor in reprehenderit in volupt ate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit.
                                    </div>
                                    <!-- End doctor text -->
                                    <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment with This Dentist</a></div>
                                </div>
                            </div>
                            <!-- End doctor item -->
                            <!-- Start doctor item -->
    
                            <!-- End doctor item -->
    
    
                            <!-- Start doctor item -->
    
                            <!-- End doctor item -->
                        </div>
                    </div>
                    <!-- End Specialists Container -->
                </div>
                <!-- End Specialists  -->
    
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
    
                <!-- What We Can Offer start -->
                <div class="row can_offer_row">
                    <div class="container">
                        <div class="can_offer_title">
                            <i class="dental_icon "><img style="margin-top: 15px;" class="color" src="image/star.png" /></i>
                            <div class="can_offer_title_lite"></div>
                        </div>
                        <div class="row can_offer_text">
                            <h4>What We Can Offer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dol magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!-- What We Can Offer end -->
            </main>
            <!--  Main end -->
@endsection