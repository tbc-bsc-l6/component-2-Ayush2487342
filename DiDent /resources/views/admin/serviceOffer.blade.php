@extends('admin.template')
@section('title')
    Service Offer Title
@endsection
@section('content')
    <div class="container">
        @if(session('success'))
        <div class="alert alert-warning alert-success fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        
      
        @endif

        <form action="{{route('service.offer.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <textarea name="heading" class="form-control @error('heading') is-invalid @else is-valid @enderror" id="heading" rows="2">
                            {{$serviceOfferTitle->heading}}
                        </textarea>
                        @error('heading')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    </div>   
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="logo" class="form-label">Image</label>
                        <input type="file" class="form-control @error('logo') is-invalid @else is-valid @enderror" id="logo" name="logo">
                        @error('logo')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                        <img src="{{asset('storage/'.$serviceOfferTitle->logo)}}" class="img-thumbnail" alt="...">
                      </div>
                </div>
            </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @else is-valid @enderror" id="exampleFormControlTextarea1" rows="4">
                    {{$serviceOfferTitle->description}}
                </textarea>
                @error('description')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
              </div>
              <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection