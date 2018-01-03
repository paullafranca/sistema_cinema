<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    //
    protected $table = 'filmes';
    protected $fillable = ['nome', 'ano_lancamento', 'genero', 'duracao', 'sinopse'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function elenco(){
    	return $this->belongsToMany('App\Elenco', 'elencos_filmes', 'id_filme', 'id_elenco');
    }
}
