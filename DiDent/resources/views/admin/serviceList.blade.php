@extends('admin.template')

@section('title')
    Service List
@endsection

@section('content')
    <div class="container">
     
    <!-- Success Message -->
    @if (session('success'))
    <div class="alert alert-success mt-4">
        {{ session('success') }}
    </div>
@endif
        <div class="my-3">
            <form action="{{ route('service.list.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" class="form-control @error('heading') is-invalid @else is-valid @enderror" id="heading" name="heading">
                            @error('heading')
                                <div class="feed-back text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="items" class="form-label">Items</label>
                            <input type="text" class="form-control @error('items') is-invalid @else is-valid @enderror" id="items" name="items">
                            @error('items')
                                <div class="feed-back text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control @error('logo') is-invalid @else is-valid @enderror" id="logo" name="logo">
                            @error('logo')
                                <div class="feed-back text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <div class="col-12">
                        <textarea class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" name="description" rows="3"></textarea>
                    </div>
                    @error('description')
                        <div class="feed-back text-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="row">
            @foreach ($serviceItems as $item)
                <div class="col-lg-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->heading}}</h5>
                            <p class="card-text">{{$item->items}}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $item->status ? 'Active' : 'Inactive' }}</p>
                            
                            <a href="{{ route('service.items.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>

                            <!-- Toggle Active/Inactive -->
                            <form action="{{ route('service.items.toggle', $item->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-sm btn-{{ $item->status ? 'warning' : 'success' }}">
                                    {{ $item->status ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>

                            <!-- Delete Button with Confirmation -->
                            <form action="{{ route('service.items.delete', $item->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this item? This action cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
