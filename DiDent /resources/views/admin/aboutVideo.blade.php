@extends('admin.template')
@section('title')
    Video
@endsection
@section('content')
    <div class="container mt-3">
        <!-- Display Session Messages (Flash Messages) -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <h2>Update YouTube Video</h2>

        <!-- Form for updating the YouTube video link -->
        <form action="{{ route('about.video.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="video" class="form-label">Share the YouTube Video Link</label>
                <textarea name="video" id="video" class="form-control @error('video') is-invalid @else is-valid @enderror" cols="3" rows="3" placeholder="Enter the YouTube video URL here">{{ old('video', $currentVideoUrl ?? $videoURL->video) }}</textarea>
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <div class="row">
            <div class="col-lg-12">
                <!-- Video start -->
               
                <h1>About YouTube Video</h1>
                <div class="video">
                    <!-- Use the processed embed URL from the database -->
                    <iframe class="lozad video-iframe" data-src="{{ $videoURL->video }}" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <!-- Video end -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0/dist/lozad.min.js"></script>
    <script>
        const observer = lozad('.lozad', {
            loaded: function(el) {
                el.src = el.getAttribute('data-src');
                el.classList.remove('lozad');
            }
        });
        observer.observe();
    </script>
@endsection

@section('styles')
    <style>
        /* Make the iframe responsive and full screen width */
        .video-iframe {
            width: 100%;
            height: 315px; /* Set the height of the video */
            max-height: 535px; /* Optional: set max height if needed */
            aspect-ratio: 16/9; /* Maintain 16:9 aspect ratio */
            border: none;
        }

        /* Optional: Adjust the video container to ensure full-width */
        .video {
            width: 100%;
            padding: 0;
        }
    </style>
@endsection
