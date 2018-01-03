<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elenco;

class ElencoController extends Controller
{
    //
    public function index() {
    	return Elenco::paginate(10);
    }

    public function show($id) {
    	return Elenco::find($id);
    }

    public function store(Request $request) {
    	$elenco = $request->all();
    	Elenco::create($sessao);

    	return response()->json(['mensagem' => 'Cadastro realizado'], 201);
    }

    public function update($id, Request $request) {
    	//ver como add table (elencos_filmes) o id_filme relacionado ao elenco;
        $elenco = Elenco::find($id);

        $elenco->fill($request->all());

        if($elenco->update()) {
            return response()->json(['mensagem' => 'Elenco atualizada'], 204);
        } else {
            return response()->json(['error' => 'Elenco não atualizada'], 400);
        }
    }

    public function destroy($id, Request $request) {
    	//ver como aremove table (elencos_filmes) o id_filme relacionado ao elenco;
        $elenco = Elenco::find($id);
        $elenco->delete();

        return response()->json(['mensagem' => 'SElenco removida'], 204);
    }
}
