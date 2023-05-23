<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HostelBooking;
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
    /**
     * Undocumented function
     *
     * @return void
     */
    public function content()
    {
        return view('admin.content');
    }
}
