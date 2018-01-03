@extends('welcome')

@section('content')
<h1>Cadastre um filme</h1>
	<form class="form-horizontal" method="post" action="/cinema/filmes/novo">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Nome</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome do filme" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Ano Lançamento</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" placeholder="Digite aqui o ano de lançamento do filme" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Gênero</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="genero" name="genero" placeholder="Digite aqui o gênero do filme" required>
		    </div>
		</div>
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Sinopse</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" id="sinopse" name="sinopse" rows="3" placeholder="Digite aqui uma breve sinopse do filme"></textarea>
		    </div>
		</div>

		<a href="/cinema/filmes/" style="color: white" class="btn btn-danger">Cancelar</a>
		<input type="submit" value="Cadastrar" class="btn btn-success">
	</form>
@endsection