<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Classe de Produtos
 *
 * @author Bruno de Brito <bruno@sysout.com.br>
 * @since 16/10/2021
 * @version 1.0.0
 */
class Product extends Model
{
    public function store() {

		return $this->belongsTo(Store::class);

	}

	public function categories() {

		return $this->belongsToMany(Category::class);
	}
}
