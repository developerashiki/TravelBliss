@extends('admin.dashboard')
@section('main_content')

<!-- Page City -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">RailTickets List </h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">RailTickets List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Leaving</th>
                        <th>Destination</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adult</th>
                        <th>Infant</th>
                        <th>Child</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($railticktes as $key=>$railticket)
                    <tr>
                        <td> {{ $key+1 }} </td>
                        <td> {{ $railticket->leaving }} </td>
                        <td> {{ $railticket->destination }} </td>
                        <td> {{ date('d-m-Y',strtotime($railticket->date)) }} </td>
                        <td> {{ $railticket->email }} </td>
                        <td> {{ $railticket->phone }} </td>
                        <td> {{ $railticket->adult }} </td>
                        <td> {{ $railticket->infant }} </td>
                        <td> {{ $railticket->child }} </td>
                        <td> {{ $railticket->message }} </td>
                        <td class="btn">
                            <form method="POST" action="{{ route('indian-railway-ticket-delete',$railticket->id) }}">
                                @csrf
                                @method('delete')

                                <button onclick=" return confirm('Are your sure delete') " class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $railticktes->links() }}
        </div>
    </div>
</div>
@endsection