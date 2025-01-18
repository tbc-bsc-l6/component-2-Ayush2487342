@extends('admin.template')

@section('title')
    Service Specialists
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
        <div class="alert alert-warning alert-success fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        
      
        @endif

        <!-- Exeptional Specialists Block start -->
        <form action="{{ route('service.specialists.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row exeptional_row">
                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control @error('heading') is-invalid @else is-valid @enderror" id="heading" name="heading" value="{{ old('heading', $specialist->heading) }}">
                        @error('heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 mb-4">
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" name="description" rows="4">{{ old('description', $specialist->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image Fields -->
                @foreach(range(1, 5) as $i)
                    <div class="col-lg-4">
                        <label for="image{{ $i }}" class="form-label">Specialist Image {{ $i }}</label>
                        <input type="file" class="form-control @error("image{$i}") is-invalid @else is-valid @enderror" id="image{{ $i }}" name="image{{ $i }}">
                        @if($specialist->{"image{$i}"})
                            <img src="{{ asset('storage/' . $specialist->{"image{$i}"} ) }}" class="img-thumbnail" alt="Specialist Image {{ $i }}">
                        @endif
                        @error("image{$i}")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endforeach
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <!-- Exeptional Specialists Block end -->
    </div>
@endsection
