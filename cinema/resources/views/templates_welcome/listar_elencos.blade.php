@extends('welcome')

@section('content')
	<h1>Elenco dos filmes</h1>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Ator</th>
				<th>Filmes</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($elencos as $elenco)
			<tr>
				<td>{{ $elenco->id }}</td>
				<td>{{ $elenco->nome }}</td>
				<td>
				@foreach($elenco->filme as $filme)		
				{{ $filme->nome}}</br>
				@endforeach
				</td>
				<td><a href="/cinema/elencos/editar/{{ $elenco->id }}" class=" glyphicon glyphicon-edit"></a></td>
				<td><a href="/cinema/elencos/deletar/{{ $elenco->id }}" class=" glyphicon glyphicon-trash"></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $elencos->links() }}
	<p id='paragraph'>Deseja cadastrar um novo elenco? <a href="/cinema/elencos/novo">Clique aqui</a>.</p>
@endsection