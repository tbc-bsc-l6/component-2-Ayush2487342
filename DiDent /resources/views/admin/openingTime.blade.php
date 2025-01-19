@extends('admin.template')

@section('title', 'Opening Time')

@section('content')
<div class="row mt-3 mx-4">
    <div class="col-lg-8 col-md-12">
        <div class="card my-4" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Dental Hospital Opening Day and Time Update</h5>

               {{-- Success, Error, or Info Messages --}}
               @if(session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           @elseif(session('error'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('error') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           @elseif(session('info'))
               <div class="alert alert-info alert-dismissible fade show" role="alert">
                   {{ session('info') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           @endif

                {{-- Form --}}
                <form method="POST" action="{{ route('opening.time.update', $openingTime->id) }}">
                    @csrf
                    @method('PUT')

                    {{-- Day 1 --}}
                    <div class="mb-3">
                        <label for="day1" class="form-label">Opening Day First</label>
                        <input 
                            type="text" 
                            class="form-control @error('day1') is-invalid @else is-valid @enderror" 
                            id="day1" 
                            name="day1" 
                            value="{{ old('day1', $openingTime->day1) }}"
                        >
                        @error('day1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Day 2 --}}
                    <div class="mb-3">
                        <label for="day2" class="form-label">Opening Day Second</label>
                        <input 
                            type="text" 
                            class="form-control @error('day2') is-invalid @else is-valid @enderror" 
                            id="day2" 
                            name="day2" 
                            value="{{ old('day2', $openingTime->day2) }}"
                        >
                        @error('day2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Checkbox --}}
                    <div class="mb-3 form-check">
                        <input 
                            type="checkbox" 
                            name="check" 
                            class="form-check-input @error('check') is-invalid @enderror" 
                            id="check"
                            {{ old('check') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="check">Check me out</label>
                        @error('check')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
