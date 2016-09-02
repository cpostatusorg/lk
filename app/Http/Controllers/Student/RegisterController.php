<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'StudRoleCheck']);
    }
    /*
     * show register form for bank
     */
    public function showRegStudForm()
    {
        return view('students/registerStud');
    }
    /*
     * post request for bank
     * return id
     */
    public function registerStud()
    {

    }
    /*
     * show card register for bank
     */
    public function showRegCardForm()
    {
        return view('students/registerCard');
    }
    /*
     * post request for bank
     * return ////
     */
    public function registerCard()
    {

    }

}
