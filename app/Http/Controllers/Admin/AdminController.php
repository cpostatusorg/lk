<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'AdminRoleCheck']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_students = User::all()->where('school_table_id', Auth::user()->school->id);

        return view('admins/admin')->with('all_students', $all_students);

    }

    public function addElement()
    {
        $free_user = User::first()->where('card_table_id', '');

    }

}
