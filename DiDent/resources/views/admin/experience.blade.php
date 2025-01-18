@extends('admin.template')
@section('title')
    About Experience
@endsection

@section('content')
<div class="container mt-3">
    <!-- Display Success or Error Messages -->
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
    @endif
    <form action="{{ route('about.experience.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-3">
                    <label for="from" class="form-label">First </label>
                    <input name="from" type="text" class="form-control @error('from') is-invalid @else is-valid @enderror" id="from" value="{{old('from')}}">
                    @error('from')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="to" class="form-label">Last words</label>
                    <input name="to" type="text" class="form-control @error('to') is-invalid @else is-valid @enderror" id="to" value="{{old('to')}}">
                    @error('to')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="d-flex flex-row mb-3 gap-2">
        @foreach ($aboutExperience as $ae)
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $ae->from }}</h5>
                    <p class="card-text">{{ $ae->to }}</p>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $ae->id }}">Edit</button>

                    <!-- Toggle for Active/Inactive Status -->
                    <form action="{{ route('about.experience.updateStatus', $ae->id) }}" method="POST" class="d-inline-block">
                      @csrf
                      @method('PUT')
                  
                      <!-- Toggle Button for Active/Inactive Status -->
                      <button type="submit" name="status" value="{{ $ae->status == 1 ? 0 : 1 }}" class="btn btn-sm {{ $ae->status == 1 ? 'btn-info' : 'btn-danger' }}">
                          {{ $ae->status == 1 ? 'Active' : 'Inactive' }}
                      </button>
                  </form>
                  <form action="{{route('about.experience.delete',$ae->id)}}" method="post" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                  </form>

                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $ae->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $ae->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $ae->id }}">Edit Experience</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('about.experience.update', $ae->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="from" class="form-label">First</label>
                                    <input name="from" type="text" class="form-control" value="{{ $ae->from }}">
                                </div>
                                <div class="mb-3">
                                    <label for="to" class="form-label">Last words</label>
                                    <input name="to" type="text" class="form-control" value="{{ $ae->to }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Delete Modal Confirmation (Optional) -->
<form id="deleteForm" action="" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

@endsection

@push('scripts')
<!-- Include Bootstrap Toggle JS (for the status switch) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
    // Delete experience function
    function deleteExperience(id) {
        if (confirm('Are you sure you want to delete this experience?')) {
            var form = document.getElementById('deleteForm');
            form.action = '/about-experience/' + id; // Adjust with your delete route
            form.submit();
        }
    }
</script>
@endpush
