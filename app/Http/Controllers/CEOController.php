<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEOController extends Controller
{
    public function index()
    {
        return view('frontend.ceo');
    }
}
