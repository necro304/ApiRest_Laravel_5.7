<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    const USARIO_ADMINISTRADOR = 'true';
    const USARIO_REGULAR = 'false';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verified',
        'verified_token',
        'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verified_token',
    ];
    public function esVerificado() {
        return $this->verified == User::USUARIO_VERIFICADO;
    }
    public function esAdministrador() {
        return $this->admin == User::USARIO_ADMINISTRADOR;
    }

    public static function generateVerificationToken() {
        return str_random(40);
    }
}
