<?php

namespace PortalDev\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PortalDev\Models\Certificado;
use PortalDev\Models\Proposta;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'sobrenome', 'usuario', 'email', 'telefone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwd', 'remember_token',
    ];

    /**
     * Relação com o model Certificado
     * Para retornar o certificado do usuário..
     * 
     * @return void
     */
    public function certificado(){
        return $this->hasOne(Certificado::class);
    }

    public function propostas()
    {
        return $this->hasMany(Proposta::class);
    }
}
