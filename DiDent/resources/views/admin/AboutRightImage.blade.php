@extends('admin.template')
@section('title')
AboutRightImage
@endsection

@section('content')
<div class="container mt-3">
    <div class="row">
        @foreach (['image1', 'image2', 'image3', 'image4'] as $key => $image)
            <div class="col-lg-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($rightImage->$image) }}" class="card-img-top" alt="Image {{ $key + 1 }}">
                    <div class="card-body">
                        <h5 class="card-title">About Image {{ ucfirst($image) }}</h5>
                        <a href="{{ route('rightImage.edit', ['image' => $image]) }}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
