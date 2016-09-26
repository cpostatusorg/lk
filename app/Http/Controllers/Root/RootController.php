<?php

namespace App\Http\Controllers\Root;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Root\School;

class RootController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'RootRoleCheck']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('roots/root');
    }

    public function showSchoolForm( )
    {
        $records = School::all();
        return view('roots/schools')->with('records', $records);
    }
}
