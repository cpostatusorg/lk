<?php

namespace App\Model\Root;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function users()
    {
        return $this->hasMany('App\Model\User', 'school_table_id', 'id');
    }
}
