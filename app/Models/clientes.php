<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class clientes extends Authenticable
{
    use Notifiable;

    protected $table = 'clientes';
    protected $fillable = ['nombre', 'email', 'telefono', 'password', 'direccion', 'colonia', 'ciudad', 'municipio', 'estado', 'api_token'];
    protected $hidden = ['password', 'api_token'];
    public $primaryKey = 'usuario';
    public $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
