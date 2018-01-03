@extends('welcome')

@section('alert')
	@php 
		if($msg === "Dados já existentes!"){
			echo "
			<div class='alert alert-warning alert-dismissible' role='alert'>
	  			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	  				<span aria-hidden='true'>&times;</span>
	  			</button>
	  			<strong>Warning!</strong> Dados já existentes!
			</div>
			";
		}
	@endphp
@endsection

@section('content')
<h1>Atualize os dados da Sessão</h1>
	<form class="form-horizontal" method="post" action="/cinema/sessoes/editar/{{$sessao->id}}">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="horario" class="col-sm-2 control-label">Horário</label>
		    <div class="col-sm-10">
		      <select name="horario" class="form-control" required>
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
		      <input type="number" class="form-control" id="lugares_disponiveis" name="lugares_disponiveis" value="{{$sessao->lugares_disponiveis}}" required>
		    </div>
		</div>

		<div class="form-group">
		    <label for="id_filme" class="col-sm-2 control-label">Filme</label>
		    <div class="col-sm-10">
			    <select name="id_filme" class="form-control" required>
					@foreach($filmes as $filme)
					<option name="id_filme" value='{{ $filme->id }}'>{{ $filme->nome }}</option>
					@endforeach
				</select>
		    </div>
		</div>

		<a href="/cinema/sessoes/" style="color: white" class="btn btn-danger">Cancelar</a>
		<input type="submit" value="Salvar" class="btn btn-success">
	</form>
@endsection