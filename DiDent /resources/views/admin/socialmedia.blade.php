@extends('admin.template')
@section('title')
    Social Media
@endsection

@section('content')
<div class="container">
    <!-- Alert Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form Section -->
    <div class="modal-body mx-3">
        <form action="{{ route('socialMedia.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="mb-3">
                        <label for="fb" class="form-label">Facebook Profile Link</label>
                        <input type="url" name="fb" class="form-control @error('fb') is-invalid @else is-valid @enderror" id="fb" value="{{ old('fb', $socialMedia->fb) }}">
                        @error('fb')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tw" class="form-label">Twitter Profile Link</label>
                        <input type="url" name="tw" class="form-control @error('tw') is-invalid @else is-valid @enderror" id="tw" value="{{ old('tw', $socialMedia->tw) }}">
                        @error('tw')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="mb-3">
                        <label for="google" class="form-label">Google Profile Link</label>
                        <input type="url" name="google" class="form-control @error('google') is-invalid @else is-valid @enderror" id="google" value="{{ old('google', $socialMedia->google) }}">
                        @error('google')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="youtube" class="form-label">YouTube Profile Link</label>
                        <input type="url" name="youtube" class="form-control @error('youtube') is-invalid @else is-valid @enderror" id="youtube" value="{{ old('youtube', $socialMedia->youtube) }}">
                        @error('youtube')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-sm">Update Links</button>
        </form>
    </div>

    <!-- Social Media Links Section -->
    <div class="row my-4 mx-0 gap-0">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <a href="{{ $socialMedia->fb }}" class="image-link" target="_blank">
                    <img src="{{ asset('assets/img/fb.png') }}" class="card-img-top hover-zoom" alt="Facebook">
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <a href="{{ $socialMedia->tw }}" class="image-link" target="_blank">
                    <img src="{{ asset('assets/img/tw.png') }}" class="card-img-top hover-zoom" alt="Twitter">
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <a href="{{ $socialMedia->google }}" class="image-link" target="_blank">
                    <img src="{{ asset('assets/img/g.png') }}" class="card-img-top hover-zoom" alt="Google">
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <a href="{{ $socialMedia->youtube }}" class="image-link" target="_blank">
                    <img src="{{ asset('assets/img/youtube.png') }}" class="card-img-top hover-zoom" alt="YouTube">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Zoom effect on hover */
    .hover-zoom {
        transition: transform 0.3s ease-in-out;
    }

    .hover-zoom:hover {
        transform: scale(1.1);
    }

    /* Optional: To remove underline from links */
    .image-link {
        text-decoration: none;
    }
</style>
@endsection
