@extends('admin.template')
@section('title')
Edit Image
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit {{ ucfirst($image) }}</h5>
                    <form action="{{ route('rightImage.update', ['image' => $image]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Current Image</label>
                            <img src="{{ asset($rightImage->$image) }}" class="img-fluid mb-3" alt="Current Image">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">New Image</label>
                            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @else is-valid @enderror">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('about.right.image', ['image' => $image]) }}" class="btn btn-secondary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
