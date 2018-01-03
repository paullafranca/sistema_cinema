<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elencos_Filmes extends Model
{
    //
    protected $table = 'elencos_filmes';
    protected $guarded = ['id_filme', 'id_elenco', 'created_at', 'update_at'];
 
    public function filme(){
    	return $this->belongsToMany("App\Filme", "id", "id_filme"); 
    }
    public function elenco(){
    	return $this->belongsToMany("App\Elenco", "id","id_elenco"); 
    }
}
