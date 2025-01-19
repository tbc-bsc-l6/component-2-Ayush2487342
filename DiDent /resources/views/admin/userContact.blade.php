@extends('admin.template')

@section('title')
    User Contact
@endsection

@section('content')
    <!-- Admin show and order status table -->
    <section>
        <div class="all-admin my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="order-list">
                            <p class="order-ac-title">User Message</p>
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
                            <div class="data-table-section table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SR No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userContacts as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td> <!-- This will display the serial number -->
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->created_at->format('m-d H:i:s') }}</td>
                                                <td>
                                                    @if ($user->status == 0)
        <form action="{{ route('user.toogle.update', ['userId' => $user->id, 'status' => 1]) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-sm btn-success"><i class="bi bi-eye-fill"></i>Read</button>
        </form>
    @else
        <form action="{{ route('user.toogle.update', ['userId' => $user->id, 'status' => 0]) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-sm btn-secondary"><i class="bi bi-eye-slash-fill"></i>Unread</button>
        </form>
    @endif
                                                    
                                                    <a href="" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#seen{{$user->id}}"><i class="bi bi-chat-dots-fill"></i>messsage</a>
                                                    <!-- Form for deleting a contact -->
        <form action="{{ route('user-contact.delete', $user->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?')"><i class="bi bi-trash-fill"></i>Delete</button>
        </form>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade" id="seen{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Name: {{$user->name}}</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="fs-4 fw-3">{{$user->message}}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Admin show and order status table end -->
@endsection
