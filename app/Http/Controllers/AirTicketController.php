<?php

namespace App\Http\Controllers;

use App\Models\AirTicket;
use Illuminate\Http\Request;
use App\Http\Requests\AirTicketRequest;
use Illuminate\Support\Facades\Session;

class AirTicketController extends Controller
{
    public function index()
    {
        return view('frontend.air_ticket');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function airTicket(AirTicketRequest $request)
    {
        $airTicket =  $request->all();
        AirTicket::create($airTicket);

        Session::flash('success', "Congratulations! Air ticket successfully added.");
        return back();
    }
}
