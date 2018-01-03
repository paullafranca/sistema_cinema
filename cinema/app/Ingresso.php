<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    //
    protected $table = 'ingressos';
    protected $fillable = ['id_sessao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
 
    public function sessao(){
    	return $this->hasOne("App\Sessao", "id", "id_sessao"); 
    }
}
