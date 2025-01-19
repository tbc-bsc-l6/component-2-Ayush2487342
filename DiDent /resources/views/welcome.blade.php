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