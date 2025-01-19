@extends('admin.template')

@section('title')
    Opening Hour
@endsection

@section('content')
  <div class="container my-3 mx-4">

    <div class="row">
      <div class="col-lg-8">
         <!-- Alert Messages -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="text-dark">
          <h2>Open Hour</h2>
        </div>
        <form method="POST" action="{{route('open.hour.store')}}">
          @csrf
          
          <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" class="form-control @error('day') is-invalid @else is-valid @enderror" value="{{old('day')}}" id="day" name="day">
            @error('day')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="time" class="form-label">Form</label>
                <input type="text" class="form-control @error('time') is-invalid @else is-valid @enderror" value="{{old('time')}}" id="time" name="time">
                @error('time')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-lg-6">
                <label for="timeto" class="form-label">To</label>
                <input type="text" class="form-control @error('timeto') is-invalid @else is-valid @enderror" value="{{old('timeto')}}" id="timeto" name="timeto">
                @error('timeto')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="other" class="form-label">Other</label>
            <input type="text" class="form-control @error('other') is-invalid @else is-valid @enderror" value="{{old('other')}}" id="other" name="other">
            @error('other')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>          
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>


<div class="d-flex flex-row mb-3 gap-2">
  @foreach ($openingHour as $open)
    <div class="card bg-success-subtle mt-3" style="width: 25rem;">
      <div class="card-body text-center">
        <h5 class="card-title"><span class="badge text-bg-secondary bg-white text-dark py-2 px-2">{{$open->day}}</span></h5>
        @if (!empty($open->time) && !empty($open->timeto))
    <h6 class="card-subtitle mb-2 text-body-secondary">
        {{ \Carbon\Carbon::createFromFormat('H:i', $open->time, 'Asia/Kathmandu')->format('h:i A') }} -
        {{ \Carbon\Carbon::createFromFormat('H:i', $open->timeto, 'Asia/Kathmandu')->format('h:i A') }}
    </h6>
@else
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $open->other }}</h6>
@endif


        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$open->id}}">update</button>
        <button class="btn btn-sm btn-danger">delete</button>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="edit{{$open->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('open.hour.update',$open->id)}}">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" class="form-control @error('day') is-invalid @else is-valid @enderror" value="{{$open->day}}" id="day" name="day">
            @error('day')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="time" class="form-label">Form</label>
                <input type="text" class="form-control @error('time') is-invalid @else is-valid @enderror" value="{{$open->time}}" id="time" name="time">
                @error('time')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-lg-6">
                <label for="timeto" class="form-label">To</label>
                <input type="text" class="form-control @error('timeto') is-invalid @else is-valid @enderror" value="{{$open->timeto}}" id="timeto" name="timeto">
                @error('timeto')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="other" class="form-label">Other</label>
            <input type="text" class="form-control @error('other') is-invalid @else is-valid @enderror" value="{{$open->other}}" id="other" name="other">
            @error('other')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn  btn-success">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>
    @endforeach
  </div>

  </div>
@endsection
