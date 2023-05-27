<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentVisaProcessingController extends Controller
{
    public function index()
    {
        return view('frontend.student_visa');
    }
}
