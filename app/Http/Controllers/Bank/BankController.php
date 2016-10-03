<?php

namespace App\Http\Controllers\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use GuzzleHttp\Client;


class BankController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('bank.bank');
    }

    //get
    public function registerStud()
    {
        return view('bank.registerStud');
    }

    //post
    public function registerStud_post()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://httpbin.org/post', [
            'query'    => [//query=запрос
                'studentID' => $this->request->input('studentId'),
                'studentFirstName' => $this->request->input('studentFirstName'),
                'studentLastname' => $this->request->input('studentLastName'),
                'studentMidname' => $this->request->input('studentMidName'),
                'schoolId' => $this->request->input('schoolId'),
                'schoolName' => $this->request->input('schoolName')
            ],
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);
        echo $response->getBody();
    }
    //get
    public function registerCard()
    {
        return view('bank.registerCard');
    }
    //post
    public function registerCard_post()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://httpbin.org/post', [
            'query'    => [//query=запрос
                'bankStudentId' => $this->request->input('studentId'),
                'cardId' => $this->request->input('studentFirstName'),
                'cardNumber' => $this->request->input('studentLastName')
            ],
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);
        echo $response->getBody();
    }
}
