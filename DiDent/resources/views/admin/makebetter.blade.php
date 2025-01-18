@extends('admin.template')
@section('title')
    Make Better
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

        <div class="mt-3">
            <form action="{{route('make.better.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control @error('image') is-invalid @else is-valid @enderror" id="logo" name="image">
                            @error('image')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                            <div class="card" style="width: 10rem;">
                                <img src="{{asset($makeBetter->image)}}" class="card-img-top" alt="...">
                                
                              </div>
                          </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-isvalid @else is-valid @enderror" name="title" id="title" value="{{$makeBetter->heading}}">
                            @error('title')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                          </div>
                    </div>
                 </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" rows="4">
                        {{$makeBetter->description}}
                    </textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                  </div>
                  <button class="btn btn-success">submit</button>
            </form>
        </div>
    </div>
@endsection