<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}