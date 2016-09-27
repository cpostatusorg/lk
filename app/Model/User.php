<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function school()
    {
        //Второй параметр - Столбец в таблице School
        //Третий параметр - Столбец в таблице Users
        return $this->hasOne('App\Model\Root\School', 'id', 'school_table_id');
    }

    public function schools()
    {
        return $this->belongsTo('App\Model\Root\School');
    }

    public function card()
    {
        return $this->hasOne('App\Model\Student\Card', 'id', 'card_table_id');
    }
}
