<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Facade\Ignition\SolutionProviders\ViewNotFoundSolutionProvider;

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
        $users = User::paginate(5);
        $roles = Role::all();
        return view('userController', compact('users','roles'));
    }

    public function destroy()
    {

    }

}