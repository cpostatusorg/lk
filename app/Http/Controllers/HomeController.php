<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = ['root', 'admin', 'student'];

        foreach ($roles as $role) {
            if(Auth::user()->hasRole($role)){
                return redirect('/'.$role);
            }
        }

        return redirect('/');
    }
}
