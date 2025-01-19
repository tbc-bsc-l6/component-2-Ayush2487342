@extends('admin.template')
@section('title')
    Service Offer List
@endsection

@section('content')
    <div class="container me-3 mr-2">

             <!-- Success Alert -->
             @if (session('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Success!</strong> {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @endif
        <form action="{{route('admin.service.offer.list.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" name="heading" class="form-control @error('heading') is-invalid @else is-valid @enderror" id="heading" value="{{old('heading')}}">
                    @error('heading')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>

            </div>
            
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @else is-valid @enderror" id="image" >
                    @error('image')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" rows="3">
                        {{old('heading')}}
                    </textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
        <div class="row mt-3 mb-3">
            @foreach ($serviceOfferLists as $sol)
    <div class="col-lg-4">
        <div class="card" style="width: 100%;">
            <img src="{{ asset('storage/' . $sol->image) }}" class="img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $sol->heading }}</h5>
                <p class="card-text">{{ $sol->description }}</p>
                <a href="{{ route('admin.service.offer.edit', $sol->id) }}" class="btn btn-sm btn-primary">Edit</a>
                
                <!-- Toggle Status Button -->
                @if ($sol->status == 1)
                    <form action="{{ route('admin.service.offer.toggle', $sol->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-sm btn-info">Active</button>
                    </form>
                @else
                    <form action="{{ route('admin.service.offer.toggle', $sol->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-sm btn-secondary">Inactive</button>
                    </form>
                @endif
                
                <!-- Delete Button -->
                <form action="{{ route('admin.service.offer.delete', $sol->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

        </div>

    </div>
@endsection