@extends('welcome')

@section('content')
	<h1>Atualize os dados de um filme</h1>
	<form class="form-horizontal" method="post" action="/cinema/filmes/editar/{{$filme->id}}">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Nome</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nome" name="nome" value="{{$filme->nome}}" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Ano Lançamento</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" value="{{$filme->ano_lancamento}}" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Gênero</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="genero" name="genero" value="{{$filme->genero}}" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Sinopse</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" id="sinopse" name="sinopse" rows="1" value="{{$filme->sinopse}}">{{$filme->sinopse}}</textarea>
		    </div>
		</div>

		<a href="/cinema/filmes/" style="color: white" class="btn btn-danger">Cancelar</a>
		<input type="submit" value="Salvar" class="btn btn-success">
	</form>
@stop