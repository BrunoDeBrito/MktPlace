<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe do "mercado"
 *
 * @author Bruno de Brito <bruno@sysout.com.br>
 * @since 16/10/2021
 * @version 1.0.0
 */
class Store extends Model
{

	public function user() {

		return $this->belongsTo(User::class);
	}

	public function products() {

		return $this->hasMany(Product::class);
	}
}
