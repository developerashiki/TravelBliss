<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyOverViewController extends Controller
{
    public function index()
    {
        return view('frontend.company_over_view');
    }
}
