<?php

namespace App\Model\Qr;

use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    public function index(){
        return Qr::all();
    }
}
