<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItalyVisaController extends Controller
{
    public function index()
    {
        return view('frontend.italy_visa');
    }
}
