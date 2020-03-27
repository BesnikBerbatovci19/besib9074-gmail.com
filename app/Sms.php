<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    //
    protected $table = 'sms';
    protected $guarded = [];


    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
