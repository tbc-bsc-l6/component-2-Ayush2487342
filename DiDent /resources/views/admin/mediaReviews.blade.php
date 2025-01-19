@extends('admin.template')

@section('title')
Media Reviews
@endsection

@section('content')
    

<!-- Social Media Links Section -->
<div class="row my-4 mx-0 gap-0">
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <a href="{{ $socialMedia->fb }}" class="image-link" target="_blank">
                <img src="{{ asset('assets/img/fb.png') }}" class="card-img-top hover-zoom" alt="Facebook">
            </a>
            <div class="card-body text-danger">
                <h5 class="card-title">4.9 <br>
                <div class="d-flex">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                </h5>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <a href="{{ $socialMedia->tw }}" class="image-link" target="_blank">
                <img src="{{ asset('assets/img/tw.png') }}" class="card-img-top hover-zoom" alt="Twitter">
            </a>
            <div class="card-body text-danger">
                <h5 class="card-title">4.9 <br>
                <div class="d-flex">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                </h5>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <a href="{{ $socialMedia->google }}" class="image-link" target="_blank">
                <img src="{{ asset('assets/img/g.png') }}" class="card-img-top hover-zoom" alt="Google">
            </a>
            <div class="card-body text-danger">
                <h5 class="card-title">4.9 <br>
                <div class="d-flex">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                </h5>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
            <a href="{{ $socialMedia->youtube }}" class="image-link" target="_blank">
                <img src="{{ asset('assets/img/youtube.png') }}" class="card-img-top hover-zoom" alt="YouTube">
            </a>
            <div class="card-body text-danger">
                <h5 class="card-title">4.9 <br>
                <div class="d-flex">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                </h5>
                
            </div>
        </div>
    </div>
</div>


@endsection