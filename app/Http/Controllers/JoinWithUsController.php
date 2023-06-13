<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinWithUsController extends Controller
{
    public function index()
    {
        return view('frontend.join_with_us');
    }
}
