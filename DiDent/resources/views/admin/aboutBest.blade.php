@extends('admin.template')
@section('title')
    Our Best
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{route('about.best.update')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><h2 class="text-dark fw-3">About page best title</h2></label>
                        <textarea name="heading" class="form-control @error('heading') is-isvalid @else is-valid @enderror" id="exampleFormControlTextarea1" rows="2">
                           {{$aboutBest->heading}}
                        </textarea>
                        @error('heading')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-sm btn-success">submit</button>
                </form>
            </div>
        </div>
        
        <div class="container row mt-3">
            <div class="col-lg-6">
                <div class="row">
                    @foreach ($aboutBestCard as $abc)
                    <!-- Why We Are item start -->
                    <div class="col-lg-6 why_we_are_item border border-success">
                        <div class="why_we_are_item_icon">
                            <i class="dental_icon">
                                <img style='width:55px;margin-top:20px' class="color" src="{{ asset($abc->logo) }}" />
                            </i>
                        </div>
                        <div class="why_we_are_item_title">{!! $abc->description !!}</div>
                        
                        <!-- Action buttons -->
                        <div class="mt-3">
                            <a href="{{ route('aboutBestCard.edit', $abc->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('aboutBestCard.destroy', $abc->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                

        </div>
            </div>
            <div class="col-lg-6">
                <form method="POST" action="{{route('about.best.card.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-1">
                      <input name="logo" type="file" class="form-control @error('logo') is-invalid @else is-valid @enderror" id="logo">
                      @error('logo')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                      <div id="emailHelp" class="form-text">We'll never share your logo with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <textarea id="ckbox" class="form-control" name="description" rows="4" placeholder="Enter additional description here">
                            
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the textarea
        CKEDITOR.replace('ckbox');
    </script>
@endsection