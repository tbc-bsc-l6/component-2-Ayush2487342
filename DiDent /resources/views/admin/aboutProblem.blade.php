@extends('admin.template')
@section('title')
    About Problem
@endsection

@section('content')
    <div class="container">
        <form action="{{route('about.problem.update')}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-lg-6 col-md-12">
                <label for="heading" class="form-label">Hedaing</label>
                <textarea name="heading" id="heading" rows="2" class="form-control @error('heading') is-invalid @else is-valid @enderror" placeholder="Enter description here">
                    {{$aboutProblem->heading}}
                </textarea>
                @error('heading')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
    
            <!-- Description 1 Textarea -->
            <div class="col-lg-8 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea id="ckbox" class="form-control" name="descriptoin" rows="4" placeholder="Enter additional description here">
                    {!! $aboutProblem->descriptoin !!}
                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the textarea
        CKEDITOR.replace('ckbox');
    </script>
@endsection