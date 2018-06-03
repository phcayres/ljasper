<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
	protected $table = 'grupos';

	protected $fillable = [
		'descricao'
	];

	protected $hidden = [
	    'create_at', 'update_at',
	];

	public function pessoas()
	{
	   return $this->belongsToMany('App\Pessoa', 'pessoa_grupo');
	}
}
