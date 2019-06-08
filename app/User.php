<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $username = 'username';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'forename', 'surname', 'dateofbirth', 'gender', 'telephone', 'address1', 'address2', 'city' ,'postcode', 'roleid', 'registrationdate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function swimmer()
    {
        return $this->hasOne('App\Swimmer', 'swimmerid');
    }

    public function swimmercoach()
    {
        return $this->hasOne('App\Swimmer', 'coachid');
    }
}
