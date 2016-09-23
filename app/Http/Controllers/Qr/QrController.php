<?php

namespace App\Http\Controllers\Qr;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Qr\Qr;

class QrController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'QrRoleCheck']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Qr::all();
        return view('qrs/qr')->with('records', $records);
    }

    public function addElement(Request $request)
    {
        $record = new Qr();
        $record->organisation = $request->input('organisation');
        $record->ration = $request->input('ration');
        $record->author = $request->input('author');
        $record->executor = $request->input('executor');
        $record->href = 'zeropoint';
        $record->save();

        $record->href = $_SERVER['HTTP_ORIGIN'].'/qrinfo/'.$record->id;
            //str_replace(" ", "", $request->input('organisation'));

        $record->save();

        return redirect('qrs/qr');

    }
}
