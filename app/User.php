<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  const DEFAULT_PASSWORD = 'admin';

    const GENDER = [
        1 => 'male',
        2 => 'female'
    ];

    const GENDER_CODE = [
        'male' => 1,
        'female' => 2
    ];

  protected $table = 'users';
  protected $fillable = [
    'username',
    'password',
    'name',
    'age' ,
    'sex' ,
    'email',
    'phonenumber',
    'address',
  ];
  protected $hidden = [
    'password', 'remember_token',
  ];
  public function setPasswordAttribute($value)
  {
        // When reset password by email, the password has already been hashed before coming here
        // So we need to check if the password needs to be hashed or not
    $this->attributes['password'] = \Hash::needsRehash($value) ? bcrypt($value) : $value;
  }
}
