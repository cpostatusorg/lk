<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Student\Card;
use Validator;

class RequestController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->middleware(['auth', 'AdminRoleCheck']);
        $this->request = $request;
    }

    public function index()
    {
        return view('admins.requests');
    }

}
