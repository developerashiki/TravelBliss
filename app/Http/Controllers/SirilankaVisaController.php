<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SirilankaVisaController extends Controller
{
    public function index()
    {
        return view('frontend.sirilanka_visa');
    }
}
