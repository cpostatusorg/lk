<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function user()
    {
        $this->belongsTo('App\Model\User');
    }
}
