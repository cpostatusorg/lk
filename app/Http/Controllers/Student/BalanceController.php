<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'StudRoleCheck']);
    }
    /*
     * show balance recharge form
     */
    public function showBalanceRechargeForm()
    {
        return view('students/balanceRecharge');
    }
    /*
     * post request for bank
     * return ////////
     */
    public function createRecharge()
    {

    }
    /*
     * bank noticing about payment
     */
    public function createPaymentNotice()
    {

    }
    /*
     * get recharge status
     * return ////
     */
    public function getRechargeStatus()
    {

    }

}
