<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard
        $user = auth()->user();

        // Return the dashboard view with data
        return view('dashboard', compact('user'));
    }
}
