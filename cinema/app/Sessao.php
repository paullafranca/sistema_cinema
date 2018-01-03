<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    //
    protected $table = 'sessoes';
    protected $fillable = ['horario', 'lugares_disponiveis', 'lugares_ocupados', 'id_filme'];
    protected $guarded = ['id', 'created_at', 'update_at'];
 
    public function filme(){
    	return $this->hasOne("App\Filme", "id", "id_filme"); 
    }
}
