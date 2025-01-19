@extends('home')

@section('title')
    Gallery
@endsection

@section('template')
         <!-- Start Recent News -->
         <div class="row news">
            <div class="container">
                <h4>Gallery</h4>
                <div class="row row-15">
                    @foreach ($gallery as $index => $g)
                        <div class="col-3 news_item">
                            <div class="news_item_vn">
                                <a target="_blank" href="{{ asset($g->image) }}" class="radius_niz swipebox">
                                    <img class="lozad img-fluid" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset($g->image) }}" alt="Gallery Image {{ $index + 1 }}" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                

            </div>
        </div>
        <!-- End Recent News -->
@endsection