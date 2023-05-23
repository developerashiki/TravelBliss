@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Hostel Booking Users </h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hostel Booking Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Room</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guest</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hostelBookings as $key=>$hostelBooking)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $hostelBooking->location }} </td>
                        <td> {{ $hostelBooking->phone }} </td>
                        <td> {{ $hostelBooking->room }} </td>
                        <td> <span class="badge bg-success"> {{ date('d-m-Y',strtotime($hostelBooking->check_in))  }} </span></td>
                        <td><span class="badge bg-danger"> {{ date('d-m-Y',strtotime($hostelBooking->check_out)) }}</span> </td>
                        <td> {{ $hostelBooking->guest }} </td>
                        <td> {{ $hostelBooking->email }} </td>
                        <td> {{ $hostelBooking->message }} </td>

                        <td class="btn">
                            <form method="POST" action="{{ route('home-booking-delete',$hostelBooking->id) }}">
                                @csrf
                                @method('delete')

                                <button onclick=" return confirm('Are your sure delete') " class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $hostelBookings->links() }}
        </div>
    </div>
</div>
@endsection