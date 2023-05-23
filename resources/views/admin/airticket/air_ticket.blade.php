@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">AirTickets List </h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">AirTickets List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Where From</th>
                        <th>Where To</th>
                        <th>Date of birth</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Adult</th>
                        <th>Child</th>
                        <th>Infant</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($airTickets as $key=>$airticket)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $airticket->name }} </td>
                        <td> {{ $airticket->email }} </td>
                        <td> {{ $airticket->phone }} </td>
                        <td> {{ $airticket->where_from }} </td>
                        <td> {{ $airticket->where_to }} </td>
                        <td> {{ date('d-m-Y',strtotime($airticket->dob)) }} </td>
                        <td> {{ date('d-m-Y',strtotime($airticket->departure_date))}} </td>
                        <td> {{ date('d-m-Y',strtotime($airticket->return_date))}} </td>
                        <td> {{ $airticket->adult }} </td>
                        <td> {{ $airticket->child }} </td>
                        <td> {{ $airticket->infant }} </td>
                        <!-- <td> {{ $airticket->message }} </td> -->
                        <td class="btn">
                            <form method="POST" action="{{ route('air-ticket-delete',$airticket->id) }}">
                                @csrf
                                @method('delete')

                                <button onclick=" return confirm('Are your sure delete') " class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $airTickets->links() }}
        </div>
    </div>
</div>
@endsection