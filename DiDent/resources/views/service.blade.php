@extends('home')
@section('title')
    Service
@endsection

@section('template')
         <!--  Main start -->
         <main>

            <!-- Service block top start -->
            <div class="overflow_hidden">
                <div class="radius_niz_mini">
                    <div class="row header_title title_service">
                        <div class="container">
                            <div class="header_title_content">
                                <h1>Services</h1>
                                <p>{{$service->description}}</p>
                                <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Make an Appointment</a></div>
                            </div>
                            <img style="width: 35%;" src="{{asset('image/tooth.jpg')}}" class="absolute_img" data-srcset="{{asset('image/tooth.jpg')}}, img/img_tooth@2x.png 2x" alt="DiDent" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service block top end -->

            <!-- Service start -->
            <div class="row services">
                <div class="overflow_hidden">
                    <div class="radius_row_niz services_row">
                        <div class="container">
                            <div class="row row-15">
                                <!-- Service item end -->
                                <!-- Service item start -->
                                @foreach ($serviceLists as $sl)
                                    
                                <a href="{{route('service.details.page',$sl->id)}}" class="services_item">
                                    <span class="services_item_title">{{$sl->heading}}</span>
                                    <span class="services_item_desc">{{$sl->items}}</span>
                                    <i class="dental_icon "> <img class="color" src="{{asset($sl->logo)}}"/></i>
                                </a>
                                @endforeach

                                <!-- Service item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service end -->

            <!-- See Testimonials Block start -->
            <div class="row see_testimonials_row">
                <div class="container overflow_hidden">
                    <div class="see_testimonials background_blue radius_mini row">
                        <div class="center_blue  row">
                            <div class="see_testimonials_content">
                                <h3>We are good at what we do. <br> And no doubts</h3>
                                <div><i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
                                <a href="/testimonials.php" class="btn_transparent">See Testimonials</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- See Testimonials Block end -->

            <!-- Exeptional Specialists Block start -->
            <div class="row exeptional_row">
                <div class="container">
                    <div class="row">
                        <div class="col-2 exeptional_l">
                            <div class="exeptional_text">
                                <h5 class="exeptional_sub_title">
                                    Exeptional Specialists
                                </h5>
                                <div class="exeptional_title">{{$specialist->heading}}</div>
                                <div class="exeptional_desk">
                                    {{$specialist->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                                        {{-- <img src="{{asset('storage/'.$specialist->image1)}}" alt=""> --}}

                                        <div class="row exeptional_img">
                                            <!-- Image 1 -->
                                            <img class="lozad" style="width: 20%;" 
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                                 data-src="{{ asset('storage/' . $specialist->image1) }}" 
                                                 alt="DiDent">
                                            
                                            <!-- Image 2 -->
                                            <img class="lozad" style="width: 20%;" 
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                                 data-src="{{ asset('storage/' . $specialist->image2) }}" 
                                                 alt="DiDent">
                                            
                                            <!-- Image 3 -->
                                            <img class="lozad" style="width: 20%;" 
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                                 data-src="{{ asset('storage/' . $specialist->image3) }}" 
                                                 alt="DiDent">
                                            
                                            <!-- Image 4 -->
                                            <img class="lozad" style="width: 20%;" 
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                                 data-src="{{ asset('storage/' . $specialist->image4) }}" 
                                                 alt="DiDent">
                                            
                                            <!-- Image 5 -->
                                            <img class="lozad" style="width: 20%;" 
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                                                 data-src="{{ asset('storage/' . $specialist->image5) }}" 
                                                 alt="DiDent">
                                        </div>
                                        
                                        
                </div>
            </div>
            <!-- Exeptional Specialists Block end -->

            <!-- What We Can Offer start -->
            <div class="row can_offer_row">
                <div class="container">
                    <div class="can_offer_title">
                        <i class="dental_icon "><img class="color" style="margin-top: 15px;" src="{{asset('storage/'.$serviceOfferDescription->logo)}}"/></i>
                        <div class="can_offer_title_lite"></div>
                    </div>
                    <div class="row can_offer_text">
                        <h4>{{$serviceOfferDescription->heading}}</h4>
                        <p>{{$serviceOfferDescription->description}}</p>
                    </div>
                </div>
            </div>
            <!-- What We Can Offer end -->

            <!-- Posts start -->
            <div class="row posts_row">
                @foreach ($serviceOfferLists as $sol)
                    @if ($sol->status == 1)
                        @if ($loop->index % 2 == 0) <!-- Use $loop->index for zero-based index -->
                            <!-- Posts item start -->
                            <div class="row posts_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1-60 posts_item_img">
                                            <div class="radius">
                                                <!-- Correct Image Path with fallback if image doesn't exist -->
                                                <img style="height: 370px; width: 100%;" 
                                                     class="lozad" 
                                                     src="{{ asset('storage/' . ($sol->image ?? 'default_image.jpg')) }}" 
                                                     data-src="{{ asset('storage/' . $sol->image) }}" 
                                                     alt="{{ $sol->heading ?? 'Service Image' }}">
                                            </div>
                                        </div>
                                        <div class="col-1-40 posts_item_desk">
                                            <div class="posts_item_title">{{ $sol->heading }}</div>
                                            <div class="posts_item_text">
                                                <p>{{ $sol->description }}</p>
                                                <a href="/blog_post.php" class="more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Posts item end -->
                        @else
                            <!-- Posts item start -->
                            <div class="row posts_item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1-60 posts_item_img">
                                            <div class="radius">
                                                <!-- Correct Image Path with fallback -->
                                                <img style="height: 370px; width: 100%;" 
                                                     class="lozad" 
                                                     src="{{ asset('storage/' . ($sol->image ?? 'default_image.jpg')) }}" 
                                                     data-src="{{ asset('storage/' . $sol->image) }}" 
                                                     alt="{{ $sol->heading ?? 'Service Image' }}">
                                            </div>
                                        </div>
                                        <div class="col-1-40 posts_item_desk">
                                            <div class="posts_item_title">{{ $sol->heading }}</div>
                                            <div class="posts_item_text">
                                                <p>{{ $sol->description }}</p>
                                                <a href="/blog_post.php" class="more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Posts item end -->
                        @endif
                    @endif
                @endforeach
            </div>

            <!-- Posts end -->

        </main>
        <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0"></script>

        <script>
            // Initialize Lozad.js
            const observer = lozad('.lozad', {
                loaded: function(el) {
                    el.classList.add('fade'); // Add fade-in effect after loading
                }
            });
            observer.observe();
        </script>
        
@endsection