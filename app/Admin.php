<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
  use Notifiable;
  protected $table = "table_admin";
  protected $fillable = [
      'nama', 'username', 'password',
  ];
  protected $hidden = [
      'password', 'remember_token',
  ];
}
