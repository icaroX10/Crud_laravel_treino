<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Model
{
    use Notifiable;
    
    protected $table = 'usuarios';
    

    protected $fillable = [
        'nome', 'email', 'senha', 'tipousuario',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
