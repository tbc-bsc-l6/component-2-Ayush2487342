@extends('admin.template')

@section('content')
<div class="col-lg-6">
    <form method="POST" action="{{route('aboutBestCard.update',$aboutBestCard->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-1">
          <input name="logo" type="file" class="form-control @error('logo') is-invalid @else is-valid @enderror" id="logo">
          @error('logo')
              <span class="text-danger">{{$message}}</span>
          @enderror
          <div id="emailHelp" class="form-text">We'll never share your logo with anyone else.</div>
        </div>
        <div class="mb-3">
            <textarea id="ckbox" class="form-control" name="description" rows="4" placeholder="Enter additional description here">
                {!! $aboutBestCard->description !!}
            </textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-success">Submit</button>
      </form>
</div>

<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor for the textarea
    CKEDITOR.replace('ckbox');
</script>
@endsection