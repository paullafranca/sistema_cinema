<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Sessao;
use App\Filme;
use App\Ingresso;

class SessaoController extends Controller
{
    //
    public function comprarIngresso($id_sessao){
    	$ingresso = new Ingresso;
        $sessao = Sessao::find($id_sessao);

        if($sessao->lugares_disponiveis > 0){
            //cria ingressos
            $ingresso->id_sessao = $id_sessao;
            $ingresso->save();
            //atualiza lugares disponíveis e ocupados em sessão
            $sessao->lugares_disponiveis = ($sessao->lugares_disponiveis)-1;
            $sessao->lugares_ocupados = ($sessao->lugares_ocupados)+1;
            $sessao->save(); 

            return back();
        }elseif ($sessao->lugares_disponiveis <= 0) {
            return back();
        }
    }

    public function all(){
    	$sessoes = Sessao::paginate(5);
    	return view('templates_welcome/listar_sessoes', compact('sessoes'));
    }

    public function newSessao(){
    	$filmes = Filme::all();//->paginate(5);
    	return view('templates_welcome/new_sessao', compact('filmes'));
    }

    public function create(Request $request){
    	$sessoes = Sessao::all();

        if(($request->horario === "null" && $request->id_filme === "null") || ($request->horario === "null" || $request->id_filme === "null")){
            return back();
        }else{
            if($sessoes->contains('horario', $request->horario) && $sessoes->contains('id_filme', $request->id_filme)){
                return redirect('/cinema/sessoes/')->with('status', 'Dados já existentes!');
            }else{
                $sessao = new Sessao;
                $sessao->lugares_disponiveis = $request->lugares_disponiveis;
                $sessao->id_filme = $request->id_filme;
                $sessao->horario = $request->horario;
                $sessao->lugares_ocupados = 0;

                $sessao->save();
                return redirect('/cinema/sessoes')->with('status', 'Sessão criada!');
            }
        }
    }

    public function delete($id){
    	$sessao = Sessao::find($id);
        $sessao->delete();

        return redirect('/cinema/sessoes');
    }

    public function update($id){
        $sessao = Sessao::find($id);
        $filmes = Filme::paginate(5);
        $msg = null;

        return view('templates_welcome/update_sessao', compact('sessao', 'filmes', 'msg'));
    }
    public function atualizar(Request $request, $id){
    	$sessoes = Sessao::all();
    	$sessao = Sessao::find($id);
        $filmes = Filme::paginate(5);
        $msg = null;

        if($sessoes->contains('horario', $request->horario) && $sessoes->contains('id_filme', $request->id_filme)){
            if($sessao->lugares_disponiveis === $request->lugares_disponiveis){
                $msg = "Dados já existentes!";
                return view('templates_welcome/update_sessao', compact('sessao', 'filmes', 'msg'));
            }else{
                $sessao->lugares_disponiveis = $request->lugares_disponiveis;
                $sessao->lugares_ocupados = 0;

                $sessao->save();
                $msg = "Dados Atualizados!";
                return redirect('/cinema/sessoes');
            }
        }else{
            $sessao->lugares_disponiveis = $request->lugares_disponiveis;
            $sessao->id_filme = $request->id_filme;
            $sessao->horario = $request->horario;
            $sessao->lugares_ocupados = 0;

            $sessao->save();
            $msg = "Dados Atualizados!";
            return redirect('/cinema/sessoes');
        }
    }
}
