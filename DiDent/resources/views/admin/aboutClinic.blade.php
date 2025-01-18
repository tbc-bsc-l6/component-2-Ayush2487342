@extends('admin.template')
@section('title')
    About Clinic
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{route('dentail.cli.update')}}" method="post">
            @csrf
            <div class="row g-3"> <!-- Added spacing between rows -->
                <!-- Heading Textarea -->
                <div class="col-lg-6 col-md-12">
                    <label for="heading" class="form-label">Heading</label>
                    <textarea name="heading" id="heading" rows="4" class="form-control @error('heading') is-invalid @else is-valid @enderror" placeholder="Enter heading here">
                        {{$clinic->heading}}
                    </textarea>
                    @error('heading')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
        
                <!-- Description Textarea -->
                <div class="col-lg-6 col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @else is-valid @enderror" placeholder="Enter description here">
                        {{$clinic->description}}
                    </textarea>
                    @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
        
                <!-- Description 1 Textarea -->
                <div class="col-lg-12 col-md-12">
                    <label for="description1" class="form-label">Description 1</label>
                    <textarea id="ckbox" class="form-control" name="paragraph" rows="4" placeholder="Enter additional description here">
                        {!! $clinic->paragraph !!}
                    </textarea>
                </div>
        
                <!-- Submit Button -->
                <div class="col-lg-12 col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-success w-25">Edit</button>
                </div>
            </div>
        </form>
        
    </div>

    
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the textarea
        CKEDITOR.replace('ckbox');
    </script>
@endsection
