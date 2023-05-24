<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HostelBooking;
use App\Http\Controllers\Controller;
use App\Models\AirTicket;
use App\Models\Contact;
use App\Models\RailTicket;

class AdminDashboardController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function content()
    {
        $this->data['totalBooking']     = HostelBooking::count();
        $this->data['totalAirTicket']   = AirTicket::count();
        $this->data['totalRailWayTicket']     = RailTicket::count();
        $this->data['totalContact']     = Contact::count();

        return view('admin.content',$this->data);
    }
}
