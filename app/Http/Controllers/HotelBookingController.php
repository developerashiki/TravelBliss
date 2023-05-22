<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HostelBooking;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\HostelBookingRequest;

class HotelBookingController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.hotel_booking');
    }

    /**
     * Hotel Booking
     * 
     */
    public function hotelBooking(HostelBookingRequest $request)
    {
        $hotelBooking =  $request->all();
        HostelBooking::create($hotelBooking);

        Session::flash('success', "Congratulations! Hostel Booking successfully done.");
        return back();
    }
}
