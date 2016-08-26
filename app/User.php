<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'telefono', 'email',
    ];

  
    protected $hidden = [
        'remember_token',
    ];

}
