@extends('welcome')

@section('content')
	<h1>Sessões</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Sessão</th>
				<th>Filme</th>
				<th>Horário</th>
				<th>Lugares Disponíveis</th>
				<th>Lugares Ocupados</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($sessoes as $sessao)
			<tr>
				<td>{{ $sessao->id }}</td>
				<td>{{ $sessao->filme->nome }}</td>
				<td>{{ $sessao->horario }}</td>
				<td>{{ $sessao->lugares_disponiveis }}</td>
				<td>{{ $sessao->lugares_ocupados }}</td>
				<td><a href="/cinema/sessoes/comprarIngresso/{{ $sessao->id }}">Comprar Ingresso</a></td>
				<td><a href="/cinema/sessoes/editar/{{ $sessao->id }}" class=" glyphicon glyphicon-edit"></a></td>
				<td><a href="/cinema/sessoes/deletar/{{ $sessao->id }}" class=" glyphicon glyphicon-trash"></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $sessoes->links() }}
	<p id='paragraph'>Deseja cadastrar uma nova sessão? <a href="/cinema/sessoes/novo">Clique aqui</a>.</p>
@endsection