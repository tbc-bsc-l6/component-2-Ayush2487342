@extends('admin.template')

@section('content')
<div class="container mt-2 ">
    <!-- Update Profile Information Section -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Update Profile Information</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name', auth()->user()->name) }}" 
                                class="form-control @error('name') is-invalid @enderror {{ old('name', auth()->user()->name) ? 'is-valid' : '' }}" 
                                required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email', auth()->user()->email) }}" 
                                class="form-control @error('email') is-invalid @enderror {{ old('email', auth()->user()->email) ? 'is-valid' : '' }}" 
                                required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Change Password</h5>
                </div>
                @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
                <div class="card-body">
                    <!-- Change Password Form -->
                    <form method="POST" action="{{ route('admin.change-password') }}">
                        @csrf
                        @method('PUT')
    
                        <!-- Current Password -->
                        <div class="form-group mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input 
                                type="password" 
                                id="current_password" 
                                name="current_password" 
                                class="form-control @error('current_password') is-invalid @else is-valid @enderror " value="{{ old('current_password') }}">
                            @error('current_password')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <!-- New Password -->
                        <div class="form-group mb-3">
                            <label for="dpassword" class="form-label">New Password</label>
                            <input 
                                type="password" 
                                id="dpassword" 
                                name="dpassword" 
                                class="form-control @error('dpassword') is-invalid @else is-valid @enderror" value="{{ old('dpassword') }}">
                            @error('dpassword')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <!-- Confirm Password -->
                        <div class="form-group mb-3">
                            <label for="dpassword_confirmation" class="form-label">Confirm Password</label>
                            <input 
                                type="password" 
                                id="dpassword_confirmation" 
                                name="dpassword_confirmation" 
                                class="form-control @error('dpassword_confirmation') is-invalid @else is-valid @enderror" value="{{ old('dpassword_confirmation') }}">
                            @error('dpassword_confirmation')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-secondary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection
