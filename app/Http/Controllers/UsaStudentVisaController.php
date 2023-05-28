<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsaStudentVisaController extends Controller
{
    public function index()
    {
        return view('frontend.usa_student_visa');
    }
}
