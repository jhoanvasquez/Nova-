<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuarios extends Model implements AuthenticatableContract

{use Authenticatable;
    protected $table = 'usuarios';
    public $timestamps = false;
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user','name','apellido','usuario','email','password','tipo_usuario'];
}
