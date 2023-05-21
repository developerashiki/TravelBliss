<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RailTicketController extends Controller
{
    public function index()
    {
        return view('frontend.rail_ticket');
    }
}
