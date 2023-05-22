<?php

namespace App\Http\Controllers;

use App\Models\RailTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RailTicketRequest;

class RailTicketController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function index()
    {
        return view('frontend.rail_ticket');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function railTicket(RailTicketRequest $request)
    {
        $railTicketBooking =  $request->all();
        RailTicket::create($railTicketBooking);

        Session::flash('success', "Congratulations! Indian railway ticket successfully added.");
        return back();
    }
}
