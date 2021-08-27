<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Administrador extends Authenticable
{
    use Notifiable;
    
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'email', 'password'];
    public $primaryKey = 'usuario';
    public $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
