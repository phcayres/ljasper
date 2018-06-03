<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
    ];

    protected $hidden = [
        'create_at', 'update_at',
    ];

    public function grupos()
    {
        return $this->belongsToMany('App\Grupo', 'pessoa_grupo');
    }    
}
