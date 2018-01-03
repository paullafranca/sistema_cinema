<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elenco extends Model
{
    //

    protected $fillable = ['nome'];

    public function filme(){
    	return $this->belongsToMany('App\Filme', 'elencos_filmes', 'id_elenco', 'id_filme');
    }
}
