@extends('welcome')

@section('content')
<h1>Cadastre uma Sessão</h1>
	<form class="form-horizontal" method="post" action="/cinema/sessoes/novo">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="horario" class="col-sm-2 control-label">Horário</label>
		    <div class="col-sm-10">
		      <select name="horario" class="form-control" required>
		      		<option id="optionNull"  value="null">Selecione um Horário</option>
					<option value='16:00:00'>16:00</option>
					<option value='18:00:00'>18:00</option>
					<option value='20:00:00'>20:00</option>
					<option value='22:00:00'>22:00</option>
				</select>
		    </div>
		</div>

		<div class="form-group">
		    <label class="col-sm-2 control-label">Capacidade</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="lugares_disponiveis" name="lugares_disponiveis" placeholder="Luagres disponíveis na sessão" required>
		    </div>
		</div>

		<div class="form-group">
		    <label for="id_filme" class="col-sm-2 control-label">Filme</label>
		    <div class="col-sm-10">
			    <select name="id_filme" class="form-control" required>			    	
		      		<option id="optionNull" value="null">Selecione um Filme</option>
					@foreach($filmes as $filme)
					<option name="id_filme" value='{{ $filme->id }}'>{{ $filme->nome }}</option>
					@endforeach
				</select>
		    </div>
		</div>

		<a href="/cinema/sessoes/" style="color: white" class="btn btn-danger">Cancelar</a>
		<input type="submit" value="Cadastrar" class="btn btn-success">
	</form>
@endsection