@extends('admin.template')
@section('title')
    Gallery Description
@endsection


@section('content')
    <div class="container my-4">
        <h1 class="text-dark mb-2">Certificates & Associations</h1>
        <form action="{{route('certifaicate.association.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label for="image" class="form-label">Certifaicates image</label>
              <input type="file" name="image" class="form-control @error('image') is-invalid @else is-valid @enderror" id="image">
              @error('image')
              <div id="image" class="invalid-feedback">
               {{$message}}
              </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        <div class="mt-3">
            <div class="row">
                @foreach ($ca as $cas)
                    
                <div class="col-lg-3 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset($cas->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <form action="{{ route('certifaicate.association.toggleUpdate', $cas->id) }}" method="post" class="d-inline-block">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-sm" id="statusButton">
                                    @if ($cas->status == 1)
                                        <span class="btn btn-sm btn-primary">Active</span>
                                    @else
                                        <span class="btn btn-sm btn-info">Inactive</span>
                                    @endif
                                </button>
                            </form>
                            <form action="{{route('certifaicate.association.delete',$cas->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    
@endsection