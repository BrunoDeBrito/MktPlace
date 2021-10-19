<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Classe de Usuarios
 *
 * @author Bruno de Brito <bruno@sysout.com.br>
 * @since 16/10/2021
 * @version 1.0.0
 */
class User extends Authenticatable
{
	use Notifiable;

	protected $fillable = [

		'name', 'email', 'password',
	];

	protected $hidden = [

		'password', 'remember_token',
	];

	protected $casts = [

		'email_verified_at' => 'datetime',
	];

	/**
	 * Mapeamento com 1:N com Loja (STORE)
	 *
	 * @return void
	 */
	public function store() {

		return $this->hasOne(Store::class);
	}

}
