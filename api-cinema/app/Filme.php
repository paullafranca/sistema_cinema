<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    //
    protected $fillable = ['nome', 'ano_lancamento', 'genero', 'duracao', 'sinopse'];

    public function elenco(){
    	return $this->belongsToMany('App\Elenco', 'elencos_filmes', 'id_filme', 'id_elenco');
    }
}
