<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sessao;

class SessaoController extends Controller
{
    //

    public function index() {
    	return Sessao::paginate(10);
    }

    public function show($id) {
    	return Sessao::find($id);
    }

    public function store(Request $request) {
    	$sessao = $request->all();
    	Sessao::create($sessao);

    	return response()->json(['mensagem' => 'Cadastro realizado'], 201);
    }

    public function update($id, Request $request) {
        $sessao = Sessao::find($id);

        $sessao->fill($request->all());

        if($sessao->update()) {
            return response()->json(['mensagem' => 'Sessão atualizada'], 204);
        } else {
            return response()->json(['error' => 'Sessão não atualizada'], 400);
        }
    }

    public function destroy($id, Request $request) {
        $sessao = Sessao::find($id);
        $sessao->delete();

        return response()->json(['mensagem' => 'Sessão removida'], 204);
    }

    
}
