<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    //
	protected $fillable = ['horario', 'lugares_disponiveis', 'lugares_ocupados', 'id_filme'];

	public function filme(){
    	return $this->hasOne("App\Filme", "id", "id_filme"); 
    }

}
