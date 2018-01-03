<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    //
    public function index() {
    	return Filme::paginate(10);
    }

    public function show($id) {
    	return Filme::find($id);
    }

    public function store(Request $request) {
    	$filme = $request->all();
    	Filme::create($sessao);

    	return response()->json(['mensagem' => 'Cadastro realizado'], 201);
    }

    public function update($id, Request $request) {
        $filme = SFilme::find($id);

        $filme->fill($request->all());

        if($filme->update()) {
            return response()->json(['mensagem' => 'Filme atualizada'], 204);
        } else {
            return response()->json(['error' => 'Filme não atualizada'], 400);
        }
    }

    public function destroy($id, Request $request) {
        $filme = Filme::find($id);
        $filme->delete();

        return response()->json(['mensagem' => 'Filme removida'], 204);
    }
}
