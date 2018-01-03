<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Filme;
use App\Elencos_Filmes;

class FilmeController extends Controller
{
    //
	public function all(){
		$filmes = Filme::paginate(5);
		return view('templates_welcome/listar_filmes', compact('filmes'));		
	}

    public function newFilme(){
    	return view('templates_welcome/new_filme');
    }
    public function create(Request $request){
    	$filme = new Filme;

    	$filme->nome = $request->nome;
    	$filme->ano_lancamento = $request->ano_lancamento;
    	$filme->genero = $request->genero;
    	$filme->sinopse = $request->sinopse;

    	$filme->save();

    	return redirect('/cinema/filmes');
    }

    public function delete($id){
    	$filme = Filme::find($id);
    	$filme->delete();

    	return redirect('/cinema/filmes/');
    }

    public function atualizar($id){
    	$filme = Filme::find($id);
    	return view('templates_welcome/update_filme', compact('filme')); 
    }
    public function update(Request $request, $id){
    	$filme = Filme::find($id);

    	$filme->nome = $request->nome;
    	$filme->ano_lancamento = $request->ano_lancamento;
    	$filme->genero = $request->genero;
    	$filme->sinopse = $request->sinopse;

    	$filme->save();

    	return redirect('/cinema/filmes/');
    }


}
