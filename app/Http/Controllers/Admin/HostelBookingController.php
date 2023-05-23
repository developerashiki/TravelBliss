<?php

namespace App\Http\Controllers\Admin;

use Brian2694\Toastr\Facades\Toastr;
use App\Models\HostelBooking;
use App\Http\Controllers\Controller;

class HostelBookingController extends Controller
{
    /**
     * Return HostelBooking
     *
     * @return void
     */
    public function hostelBooking()
    {
        $this->data['hostelBookings'] = HostelBooking::latest('id')->simplePaginate(20);

        return view('admin.hostel.hostel_booking', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hostelBooking = HostelBooking::findOrFail($id);
        $hostelBooking->delete();

        Toastr::success('Hostel Booking user successfully delete :)', 'Success');
        return redirect()->back();
    }
}
