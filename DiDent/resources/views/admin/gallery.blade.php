@extends('admin.template')
@section('title')
    gallery
@endsection

@section('content')
    <div class="container">
        <h2 class="text-dark my-3">Add Gallery</h2>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @else is-valid @enderror" id="image">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="card" style="width: 18rem;">
                    <img id="previewImage" src="..." class="card-img-top" alt="Preview Image">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($gallery as $g)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($g->image) }}" class="card-img-top img-fluid object-fit-cover border" alt="Gallery Image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

    <script>
        // Select the file input and image preview
        const imageInput = document.getElementById('image');
        const previewImage = document.getElementById('previewImage');

        // Add event listener for file input change
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];  // Get the first selected file
            
            if (file) {
                // Create a FileReader to read the file
                const reader = new FileReader();
                
                // Define the onload function to update the image preview
                reader.onload = function(e) {
                    previewImage.src = e.target.result;  // Set the image source to the result of FileReader
                };

                // Read the selected file as a data URL (base64)
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
