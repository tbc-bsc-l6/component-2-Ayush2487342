@extends('admin.template')
@section('title')
    Testimonial
@endsection

@section('content')
    <div class="container">
        <h1>Recent Testimonials</h1>

        <section>
            <div class="all-admin my-5">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="order-list">
                                <p class="order-ac-title">Order Status</p>
    
                                <div class="data-table-section table-responsive">
                                    <table id="example" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>profile</th>
                                                <th>description</th>
                                                <th>date</th>
                                                <th>Ratings</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rateings as $rating)
                                                
                                            <tr>
                                                <td>{{$rating->name}}</td>
                                                <td>
                                                    <div class="card" style="width: 10rem;">
                                                        <img src="{{asset($rating->profile)}}" class="card-img-top" alt="...">
                                                       
                                                      </div>
                                                </td>
                                                <td>
                                                    <p style="word-wrap: break-word; white-space: pre-wrap; max-width: 300px;">
                                                        {{ Str::words($rating->description, 20, '...') }}
                                                    </p>
                                                </td>
                                                <td>{{$rating->date}}</td>
                                                <td>{{$rating->rateing}}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success">edit</button>
                                                    <button class="btn btn-sm btn-info">active</button>
                                                    <button class="btn btn-sm btn-danger">delete</button>
                                                </td>
                                            </tr>
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
    </div>
@endsection