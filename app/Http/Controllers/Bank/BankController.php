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
        $this->register();

    }

    public function register()
    {
        //$client = new Client();
        //$res = $client->post('http://192.168.0.13/index.php',[
        //    'json' => ['foo' => 'bar']
        //]);
        // echo '___';
        //echo $res->getBody()->getContents();

        $json = array("name" => "Hagrid", "age" => "36");
        $real = json_encode($json);
        $real = array($real);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'http://192.168.0.13/index.php');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $real);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


        $dwdw = curl_exec($curl);
        curl_close($curl);

        var_dump($dwdw);

    }
}
