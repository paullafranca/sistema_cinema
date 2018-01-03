@extends('welcome')

@section('content')
	<h1>Filmes em Cartaz</h1>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Ano do Lançamento</th>
				<th>Sinopse</th>
				<th>Gênero</th>				
				<th>Duração</th>
				<th>Elenco</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($filmes as $filme)
			<tr>
				<td>{{ $filme->id }}</td>
				<td>{{ $filme->nome }}</td>
				<td>{{ $filme->ano_lancamento }}</td>
				<td id="td">{{ $filme->sinopse }}</td>
				<td>{{ $filme->genero }}</td>				
				<td>{{ $filme->duracao }}</td>	
				<td>
				@foreach($filme->elenco as $elenco)		
				{{ $elenco->nome}}</br>
				@endforeach
				</td>
				<td><a href="/cinema/filmes/editar/{{ $filme->id }}" class=" glyphicon glyphicon-edit"></a></td>
				<td><a href="/cinema/filmes/deletar/{{ $filme->id }}" class=" glyphicon glyphicon-trash"></a></td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $filmes->links() }}
	<p id='paragraph'>Deseja cadastrar um novo filme? <a href="/cinema/filmes/novo">Clique aqui</a>.</p>

@endsection