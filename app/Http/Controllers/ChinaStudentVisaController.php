<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChinaStudentVisaController extends Controller
{
    public function index()
    {
        return view('frontend.china_student_visa');
    }
}
