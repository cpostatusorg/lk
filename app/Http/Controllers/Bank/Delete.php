<?php

namespace App\Http\Controllers\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use GuzzleHttp\Client;


class BankController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bank.test');

    }

    public function register()
    {
        $client = new Client();

        $json = array('data1'=>123,'data2'=>"text");
        $json2 = json_encode($json);
        $json3 = json_decode($json2);
        $text = '123';

        $response = $client->request('POST', 'http://httpbin.org/post', [
            'query'    => [
                'studentID' => 'dw',
                'string' => 'dw'
            ],
            'headers'  => [
                'Authorization' => 'Bearer _token_'
            ]
        ]);
        $input_data = file_get_contents("php://stdin");
//        $input_data = file_get_contents("php://stdour");
        $input_data = file_get_contents("php://stderr");
        $input_data = file_get_contents("php://input");

        $fr = fopen("php://stdin", "r");
        $fw = fopen("php://stdout", "w");

        echo $response->getBody();
    }

    public function poste()
    {
        //$data = json_decode($_POST['formData']);
        echo 2;
    }
}
