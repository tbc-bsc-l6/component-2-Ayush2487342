@extends('home')
@section('title')
    About
@endsection

@section('template')
<main> 
    <!-- About start -->
    <div class="container about">
        <div class="row">
            <!-- About left col start -->
            <div class="col-2 about_left">
                <div class="row">
                    <h1>{{$clinic->heading}}</h1>
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

                    <!-- About image right col end -->
                </div>
                <!-- About image end -->
            </div>
            <!-- About right col end -->
        </div>
    </div>
    <!-- About end -->

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




    <!-- Why We Are start -->
    <div class="row why_we_are">
        <div class="container">
             <h4>{{$aboutBest->heading}}</h4>
             
             <div class="row why_we_are_content">
                <div class="row">
                    @foreach ($aboutBestCard as $abc)
                        
                    <!-- Why We Are item start -->
                    <div class="col-3 why_we_are_item">
                        <div class="why_we_are_item_icon"><i class="dental_icon "><img style='width:55px;margin-top:20px' class="color" src="{{asset($abc->logo)}}"/></i></div>
                        <div class="why_we_are_item_text">{!! $abc->description !!}</div>
                    </div>
                    @endforeach

             </div>
             
        </div>
    </div>
    <!-- Why We Are end -->  

  <!-- Certificates start -->
  <div class="row certificates">
        <div class="container row">
            <h4>Certificates & Associations</h4>
            <div class="navigation"></div>
        </div>
        <div class="owl_certificates owl-carousel owl-theme gallery">
            @foreach ($ca as $cas)
                @if ($cas->status ==1)
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
    

    <!-- Gets start -->
    <div class="row gets">
        <div class="container">
            <h4>
                <i class="dental_icon dentalic_quote"></i>
                {{$aboutProblem->heading}}
            </h4>
            <!-- Gets text start -->
            <div class="col-1-60 gets_text">
                {!! $aboutProblem->descriptoin !!}
            </div>
            <!-- Gets text end -->
            <!-- Gets advantages start -->
            <div class="col-1-40 advantages">
                @foreach ($aboutExperience1 as $item)
                <div class="row advantages_item"> 
                    <strong>{{$item->from}}</strong>
                    <span>{{$item->to}}</span> 
                </div> 
                @endforeach
                
                
            </div>
            <!-- Gets advantages end --> 
        </div>
    </div>
    <!-- Gets end -->
    
    <!-- Costum text start -->
    <div class="row costum_text">
        <div class="container">
            <!-- Costum text img end -->
            <div class="col-2 costum_text_img">
                @if($aboutGalleryDescription->image1)
                    <img 
                        style="width:48%; height:200px; margin-right:10px;" 
                        class="lozad" 
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                        data-src="{{ asset('storage/' . $aboutGalleryDescription->image1) }}" 
                        data-srcset="{{ asset('storage/' . $aboutGalleryDescription->image1) }}, {{ asset('storage/' . $aboutGalleryDescription->image1) }} 2x" 
                        alt="Image 1">
                @endif
            
                @if($aboutGalleryDescription->image2)
                    <img 
                        style="width:48%; height:200px; margin-left:10px;" 
                        class="lozad" 
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
                        data-src="{{ asset('storage/' . $aboutGalleryDescription->image2) }}" 
                        data-srcset="{{ asset('storage/' . $aboutGalleryDescription->image2) }}, {{ asset('storage/' . $aboutGalleryDescription->image2) }} 2x" 
                        alt="Image 2">
                @endif
            </div>
            
            <!-- Costum text img end -->
            <!-- Costum text start -->
            <div class="col-2 costum_text_content">
                {!! $aboutGalleryDescription->description !!}
            </div>
            <!-- Costum text end --> 
        </div>
    </div>
    <!-- Costum text end -->
</main>
@endsection