@extends('admin.template')
@section('title')
    Recent News Edit
@endsection
@section('content')
    <div class="container">
        <!-- Update Form -->
        <form method="POST" action="{{route('recent.news.update',$recentNewUpdate->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Specify PUT method for updates -->
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="card" style="width: 10rem">
                        <img src="{{ asset($recentNewUpdate->image) }}" class="card-img-top" alt="News Image">
                    </div>

                </div>

                <div class="col-lg-6 mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" value="{{ $recentNewUpdate->heading }}">
                    @error('heading')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $recentNewUpdate->date }}">
                    @error('date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ $recentNewUpdate->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('recent.news')}}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
