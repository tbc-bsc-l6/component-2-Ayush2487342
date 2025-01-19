@extends('admin.template')
@section('title')
    Add Reviews
@endsection

@section('content')
<div class="container my-3 me-3">
    <div class="mb-2">
        <h3 class="text-dark">Revies Add</h3>
    </div>
    <form method="POST" action="{{ route('reviews.store') }}" enctype="multipart/form-data">
        @csrf <!-- Add CSRF token for security -->
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="profile" class="form-label">Profile Picture</label>
                    <input type="file" class="form-control @error('profile') is-invalid @else is-valid @enderror" id="profile" name="profile">
                    @error('profile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" id="name" name="name" placeholder="Enter a name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control @error('date') is-invalid @else is-valid @enderror" id="date" name="date" value="{{ old('date') }}">
                    @error('date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="rateing" class="form-label">Rating</label>
                    <input type="text" class="form-control @error('rateing') is-invalid @else is-valid @enderror" id="rateing" name="rateing" placeholder="Enter a rating" value="{{ old('rateing') }}">
                    @error('rateing')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Review Description</label>
            <textarea class="form-control @error('description') is-invalid @else is-valid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>


<div class="container">
    <div class="row">
        @foreach ($rateings as $rateing)
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset($rateing->profile)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$rateing->name}}</h5>
                  <p class="card-test">{{$rateing->date}}</p>
                  <p class="card-text">{{$rateing->description}}</p>
                  <a href="#" class="btn btn-info btn-sm">active</a>
                  <a href="#" class="btn btn-success btn-sm">edit</a>
                  <form action="{{ route('reviews.add.destory', $rateing->id) }}" method="post" class="d-inline-block" id="delete-form-{{ $rateing->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $rateing->id }})">Delete</button>
                </form>
                
                <script>
                    function confirmDelete(id) {
                        // Show confirmation alert
                        if (confirm('Are you sure you want to delete this review?')) {
                            // If the user clicks "OK", submit the form
                            document.getElementById('delete-form-' + id).submit();
                        }
                    }
                </script>
                
                  
                </div>
              </div>
        </div> 
        @endforeach
       
    </div>
</div>
@endsection