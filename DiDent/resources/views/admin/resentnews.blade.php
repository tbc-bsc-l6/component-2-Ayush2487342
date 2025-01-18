@extends('admin.template')
@section('title')
Recent News
@endsection

@section('content')
    <div class="container mt-3">

    <!-- Success Message -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h1>Recent News</h1>

        <form method="POST" action="{{route('recent.news.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="row mx-3">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input name="image" type="file" class="form-control @error('image') is-invalid @else is-valid @enderror" id="image" >
                        @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control @error('heading') is-invalid @else is-valid @enderror" id="heading" name="heading">
                        @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control  @error('date') is-invalid @else is-valid @enderror" name="date" id="date">
                        @error('heading')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">New Description</label>
                        <textarea name="description" class="form-control  @error('description') is-invalid @else is-valid @enderror" id="description" rows="3">

                        </textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>
                </div>
                <div class="col-lg-3 mx-4 mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>

        </form>
        <div class="row">
            @foreach ($recentNews as $rn)
                
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($rn->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$rn->heading}}</h5>
                      <p class="card-text">
                        <small class="text-muted">{{$rn->date}}</small>
                    </p>
                      <p class="card-text">{{$rn->description}}</p>
                      <a href="{{route('recent.news.edit',$rn->id)}}" class="btn btn-sm btn-primary">edit</a>
                      <form action="{{route('recent.news.delete',$rn->id)}}" method="post" class="d-inline-block">
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
@endsection