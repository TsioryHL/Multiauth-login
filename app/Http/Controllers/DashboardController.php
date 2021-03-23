<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user'))
        {
            return view('userDash');
        }elseif(Auth::user()->hasRole('manager'))
        {
            return view('managerDash');
        }elseif(Auth::user()->hasRole('admin'))
        {
            return view('dashboard');
        }
    }

    public function controlleUser()
    {
        return view('userController');
    }
}