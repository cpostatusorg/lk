<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'StudRoleCheck']);
    }
    /*
     * Transaction process with bank
     */
    public function Transaction()
    {

    }

}
