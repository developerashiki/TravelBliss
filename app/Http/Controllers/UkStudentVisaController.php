<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkStudentVisaController extends Controller
{
    public function index()
    {
        return view('frontend.uk_student_visa');
    }
}
