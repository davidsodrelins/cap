<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User 
{

    protected $fillable = [
        'conta', 'saldo', 'name', 'email', 'password',
    ];

}
