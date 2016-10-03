<?php

namespace App\Http\Controllers\Bank;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use GuzzleHttp\Client;
use DateTime;


class BalanceController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //Получить баланс
    public function balanceGet()
    {
        return view('bank.balanceGet');
    }

    public function balanceGet_get()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://httpbin.org/get', [
            'query'    => 'bankStudentId='.$this->request->input('bankStudentId'),
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);

        echo $response->getBody();
    }

    //Транзакция
    public function transaction()
    {
        return view('bank.transaction');
    }

    public function transaction_post()
    {
        $datetime = new DateTime($this->request->input('date'));
        $iso_date = $datetime->format(DateTime::ATOM);

        $client = new Client();

        $response = $client->request('POST', 'http://192.168.0.13', [
            'json'    => [//query=запрос
                'transaction' => [
                    'transactionId' => $this->request->input('transactionId'),
                    'bankStudentId' => $this->request->input('bankStudentId'),
                    'date' => $iso_date,
                    'sum' => $this->request->input('sum'),
                    'cardId' => $this->request->input('cardId'),
                    'place' => $this->request->input('place')
                ]

            ],
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'application/json'
                ]
        ]);
        echo $response->getBody();

    }

    //Получить список пополнений
    public function balanceListRecharges()
    {
        return view('bank.balanceListRecharges');
    }

    public function balanceListRecharges_get()
    {
        $datetime = new DateTime($this->request->input('startDate'));
        $iso_date_start = $datetime->format(DateTime::ATOM);

        $datetime = new DateTime($this->request->input('endDate'));
        $iso_date_end = $datetime->format(DateTime::ATOM);

        $client = new Client();
        $response = $client->request('GET', 'http://httpbin.org/get', [
            'query'    => 'bankStudentId='.$this->request->input('bankStudentId').'&'.'startDate='.$iso_date_start.'&'.'endDate='.$iso_date_end,
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);

        echo $response->getBody();
    }

    public function balanceNotice()
    {
        return view('bank.balanceNotice');
    }

    public function balanceNotice_post()
    {
        //Мы принимаем json
    }

    public function balanceRecharge()
    {
        return view('bank.balanceRecharge');
    }

    public function balanceRecharge_post()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://httpbin.org/post', [
            'query'    => [//query=запрос
                'studentID' => $this->request->input('bankStudentId'),
                'studentFirstName' => $this->request->input('amount'),
                'studentLastname' => $this->request->input('redirectUrl')
            ],
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);
        echo $response->getBody();
    }

    public function statusRecharge()
    {
        return view('bank.statusRecharge');
    }

    public function statusRecharge_get()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://httpbin.org/get', [
            'query'    => 'bankOrderId='.$this->request->input('bankOrderId'),
            'headers'  => [
                'Authorization' => 'Bearer _token_',
                'Content-type' => 'text/plain'
            ]
        ]);
        echo $response->getBody();
    }
}
