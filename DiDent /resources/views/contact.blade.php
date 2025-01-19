@extends('home')

@section('template')
<main>
    <!-- Contact -->
    <div class="container">
        <div class="row contact_row">
            <!-- Get in Touch -->
            <div class="row contact_row_title">
                <h1>Get in Touch</h1>
                <div class="contact_row_soc">
                    <a target="_blank" href="{{$socialMedia->fb}}"><i class="fa-brands fa-facebook"></i></a>
                    <a target="_blank" href="{{$socialMedia->tw}}"><i class="fa-brands fa-twitter"></i></a>
                    <a target="_blank" href="{{$socialMedia->google}}"><i class="fa-brands fa-google-plus"></i></a>
                    <a target="_blank" href="{{$socialMedia->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <!-- Get in Touch -->

            <!-- Leave a Reply -->
            <h4>Leave a Reply</h4>
            <p>Reach us with your questions. We are looking forward hearing form you!</p>
           
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
                <div class="row message_row">
                    <textarea class="posText" name="posText">{{ old('posText') }}</textarea>
                    @error('posText')
                        <div class="error-message" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row row-15">
                    <div class="col-3">
                        <div class="leable">Full Name</div>
                        <input class="posName" type="text" name="posName" value="{{ old('posName') }}">
                        @error('posName')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <div class="leable">Email</div>
                        <input class="posEmail" type="email" name="posEmail" value="{{ old('posEmail') }}" />
                        @error('posEmail')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-3">
                        <div class="leable">Phone (ex. 650 123-4000)</div>
                        <input class="posTel" type="text" name="posTel" value="{{ old('posTel') }}">
                        @error('posTel')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-success">submit</button>
        
        </form>
        
        <style>
            .error-message {
                color: red;
                font-size: 0.875em;
            }
            .alert-success {
                color: green;
                font-weight: bold;
                margin-bottom: 15px;
            }
        </style>
        
            <!-- Send button -->

            <!-- Open Hours -->
            <div class="row open_hours_contact">
                <h4>Open Hours</h4>
                <div class="row open_hours_row">
                    
                    @foreach ($openHr as $hr)
                    
                    @if (!empty($hr->time) && !empty($hr->timeto))
                    @if ($hr->id % 2 ==0)
                    <div class="col-3 open_hours_l">
                        <div class="day">{{$hr->day}}</div>
                        <div class="row open_hours_block">
                            {{ \Carbon\Carbon::createFromFormat('H:i', $hr->time, 'Asia/Kathmandu')->format('h:i A') }} -
                            {{ \Carbon\Carbon::createFromFormat('H:i', $hr->timeto, 'Asia/Kathmandu')->format('h:i A') }}
                        </div>
                    </div>
                    @else
                    <div class="col-3 open_hours_c">
                        <div class="day">{{$hr->day}}</div>
                        <div class="row open_hours_block">
                            {{ \Carbon\Carbon::createFromFormat('H:i', $hr->time, 'Asia/Kathmandu')->format('h:i A') }} -
                            {{ \Carbon\Carbon::createFromFormat('H:i', $hr->timeto, 'Asia/Kathmandu')->format('h:i A') }}
                        </div>
                    </div> 
                    @endif
                    @else
                    <div class="col-3 open_hours_r">
                        <div class="day">{{$hr->day}}</div>
                        <div class="row open_hours_block">
                            {{$hr->other}}
                        </div>
                    </div> 
                    @endif
                    
                    @endforeach
                    
                    
                </div>
            </div>
            <!-- Open Hours -->
        </div>
    </div>
    <!-- Contact -->
</main>
@endsection
