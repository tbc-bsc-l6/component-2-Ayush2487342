@extends('admin.template')
@section('title')
    Service
@endsection
@section('content')
    <div class="container mt-4">

        {{-- Session Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form --}}
        <form action="{{ route('admin.service.update') }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="description" class="form-label">Service Description</label>
                <textarea 
                    class="form-control @error('description') is-invalid @else is-valid @enderror" 
                    name="description" 
                    id="description" 
                    rows="5"
                    style="text-align: center;" {{-- Centered text in textarea --}}
                >{{ $service->description }}</textarea>

                {{-- Validation Error Message --}}
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
