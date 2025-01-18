@extends('admin.template')

@section('title')
    Edit Service Offer
@endsection

@section('content')
    <div class="container me-3 mr-2">
        <h2>Edit Service Offer</h2>
        <form action="{{ route('admin.service.offer.update', $serviceOffer->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Heading -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" name="heading" 
                               class="form-control @error('heading') is-invalid @else is-valid @enderror" 
                               id="heading" 
                               value="{{ old('heading', $serviceOffer->heading) }}">
                        @error('heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" 
                               class="form-control @error('image') is-invalid @else is-valid @enderror" 
                               id="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mt-2">
                            <img src="{{asset('storage/'.$serviceOffer->image)}}" class="img-thumbnail" alt="..." style="width: 20rem">
                        </div> 
                    </div>
                </div>

                <!-- Description -->
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" 
                                  class="form-control @error('description') is-invalid @else is-valid @enderror" 
                                  id="description" rows="3">{{ old('description', $serviceOffer->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.service.offer.list') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
{{-- dd --}}
@endsection
