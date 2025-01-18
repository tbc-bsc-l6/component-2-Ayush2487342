@extends('admin.template')

@section('title')
    Setting
@endsection

@section('content')
    
<div class="row">
    <div class="col-lg-6 col-md-6 mt-4">
        <div class="card py-2 px-2" style="width: 100%;">
            <img src="{{asset($logo->logo)}}" class="card-img-top" alt="...">
            
          </div>
    </div>
    <div class="col-lg-4 col-md-8 mt-4">
        <!-- Alert Message -->
        <div id="alert-message" class="alert d-none" role="alert"></div>

        <!-- Dropzone Form -->
        <form action="{{ route('image.upload.post') }}" method="POST" class="dropzone" id="image-upload-form" enctype="multipart/form-data">
            @csrf
        </form>

        <!-- Submit Button -->
        <button class="btn btn-success mt-3 w-100" id="submit-button">Submit</button>
    </div>
    <div class="col-12 col-lg-8 mx-4 my-3">
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
    

        <form method="POST" action="{{route('hospital.info.update')}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number </label>
              <input type="text" name="phone" class=" form-control @error('phone') is-invalid @else is-valid @enderror" id="phone" value="{{ $hospitalInfo->phone}}">
              @error('phone')
                  <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @else is-valid @enderror" id="email" name="email" value="{{$hospitalInfo->email}}">
              @error('email')
                  <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @else is-valid @enderror" id="email" name="location" value="{{$hospitalInfo->location}}">
                @error('location')
                  <span class="text-danger">{{$message}}</span>
              @enderror
              </div>
              <div class="mb-3 form-check">
                <input 
                type="checkbox" 
                class="form-check-input @error('checkbox') is-invalid @enderror" 
                id="exampleCheck1" 
                name="checkbox"
                checked
            >
            
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                
                @error('checkbox')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
    </div>
</div>
@endsection