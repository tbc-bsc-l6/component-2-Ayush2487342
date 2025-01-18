@extends('admin.template')

@section('title')
    Edit Service Item
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3 class="mb-3">Edit Service Item</h3>
                <form action="{{ route('service.items.update', $serviceItem->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <!-- Heading Field -->
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control @error('heading') is-invalid @enderror" id="heading" name="heading" value="{{ old('heading', $serviceItem->heading) }}">
                        @error('heading')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <!-- Items Field -->
                        <label for="items" class="form-label">Items</label>
                        <input type="text" class="form-control @error('items') is-invalid @enderror" id="items" name="items" value="{{ old('items', $serviceItem->items) }}">
                        @error('items')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <!-- Logo Field -->
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
                        <small class="form-text text-muted">Leave this blank if you don't want to update the logo.</small>
                        @if ($serviceItem->logo)
                            <div class="mt-2">
                                <p>Current Logo:</p>
                                <img src="{{ asset('storage/' . $serviceItem->logo) }}" alt="Logo" style="width: 100px; height: auto;">
                            </div>
                        @endif
                        @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <!-- Description Field -->
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $serviceItem->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <!-- Back Button -->
                        {{-- <a href="{{ route('admin.service.list') }}" class="btn btn-secondary">Back</a> --}}
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

@endsection
