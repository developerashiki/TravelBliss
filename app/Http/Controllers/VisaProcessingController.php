<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaProcessingController extends Controller
{
    public function index()
    {
        return view('frontend.visa_processing');
    }
}
