<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Elenco;
use App\Filme;
use App\Elencos_Filmes;

class ElencoController extends Controller
{
    //
    public function all(){    	
		$elencos = Elenco::paginate(5);
    	return view('templates_welcome/listar_elencos', compact('elencos'));
    }

    public function newElenco(){
    	$filmes = Filme::all();
    	return view('templates_welcome/new_elencos', compact('filmes'));
    }

    public function create(Request $request){
    	$elenco = new Elenco;

    	if($request->id_filme === "null"){
            return back();
        }else{
            $elenco->nome = $request->nome;
            $elenco->save();

            $elenco->filme()->attach($request->id_filme);
            
            return redirect('/cinema/elencos/');
        }
        
    }

    public function delete($id){
        $elenco = Elenco::find($id);
        $elenco->delete();

        return redirect('/cinema/elencos/');
    }

    public function atualizar($id){
        $ator = Elenco::find($id);
        $filmes = Filme::paginate(5);
    	return view('templates_welcome/update_elenco', compact('ator', 'filmes')); 
    }

    public function update(Request $request, $id){
    	$elenco = Elenco::find($id);

    	$elenco->nome = $request->nome;

    	$elenco->save();

    	return redirect('/cinema/elencos/');
    	//na página de atualizar os dados, será possivel já colocar (add ou delete) o filme e elenco na tabela elencos_filmes...
    }
    public function addFilme($id_filme, $id_elenco){
        
        $elenco = Elenco::find($id_elenco);
        $elenco->filme()->attach($id_filme);

        return back();

    }

    public function deleteFilme($id_filme, $id_elenco){
        $elenco = Elenco::find($id_elenco);
        $elenco->filme()->detach($id_filme);

        return back();

    }
}
