<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elenco extends Model
{
    //
    protected $table = 'elencos';
    protected $fillable = ['nome'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function filme(){
    	return $this->belongsToMany('App\Filme', 'elencos_filmes', 'id_elenco', 'id_filme');
    }
 
}
