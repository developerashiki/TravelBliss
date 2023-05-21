<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirTicketController extends Controller
{
    public function index()
    {
        return view('frontend.air_ticket');
    }
}
