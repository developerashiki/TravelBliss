<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        return view('frontend.mission_vision');
    }
}
