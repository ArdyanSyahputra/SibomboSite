<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Retrieve the currently authenticated user
            $user = Auth::user();
    
            // Pass the user data to the view
            return view('dashboard', ['user' => $user]);
        } else {
            // If the user is not authenticated, you can handle it accordingly
            // For example, you might want to redirect to the login page
            return redirect()->route('login');
        }
    }
}
