@extends('admin.template')
@section('title')
    Gallery Description
@endsection


@section('content')
    <div class="container my-4">
        <h1 class="text-dark mb-2">Gallery Description</h1>
        <form action="{{route('gallery.description.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="image" class="form-label">Certifaicates image</label>
                        <input type="file" name="image1" class="form-control @error('image1') is-invalid @else is-valid @enderror" id="image1">
                        @error('image1')
                        <div id="image1" class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                        <div class="card" style="width: 10rem;">
                            <img src="{{asset('storage/'.$aboutGalleryDescription->image1)}}" class="card-img-top" alt="...">
                           
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="image2" class="form-label"> image 2</label>
                        <input type="file" name="image2" class="form-control @error('image2') is-invalid @else is-valid @enderror" id="image2">
                        @error('image2')
                        <div id="image" class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                        <div class="card" style="width: 10rem;">
                            <img src="{{asset('storage/'.$aboutGalleryDescription->image2)}}" class="card-img-top" alt="...">
                           
                        </div>
                      </div>
                </div>

                <!-- Description 1 Textarea -->
                <div class="col-lg-8 col-md-12">
                    <label for="description1" class="form-label">Description </label>
                    <textarea id="ckbox" class="form-control @error('description') is-invalid @else is-valid @enderror" name="description" rows="4" placeholder="Enter additional description here">
                       {!! $aboutGalleryDescription->description !!}
                    </textarea>
                </div>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
    
    </div>
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the textarea
        CKEDITOR.replace('ckbox');
    </script>
@endsection