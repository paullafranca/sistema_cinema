@extends('welcome')

@section('content')
<h1>Cadastre um Elenco</h1>
	<form class="form-horizontal" method="post" action="/cinema/elencos/novo">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Nome</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui o nome do ator" required>
		    </div>
		</div>

		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Filme</label>
		    <div class="col-sm-10">
			    <select name="id_filme" class="form-control" required>
			    	<option id="optionNull" value="null">Selecione um Filme</option>
					@foreach($filmes as $filme)
					<option name="id_filme" value='{{ $filme->id }}'>{{ $filme->nome }}</option>
					@endforeach
				</select>
		    </div>
		</div>

		<a href="/cinema/elencos/" style="color: white" class="btn btn-danger">Cancelar</a>
		<input type="submit" value="Cadastrar" class="btn btn-success">
	</form>
@endsection