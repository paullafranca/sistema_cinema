@extends('welcome')

@section('content')
	<h1>Atualize os dados do ator</h1>
	<form class="form-horizontal" method="post" action="/cinema/elencos/editar/{{$ator->id}}">
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="nome" class="col-sm-2 control-label">Nome</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nome" name="nome" value="{{$ator->nome}}" required>
		    </div>
		</div>

		<div class="form-group">
		    <label class="col-sm-2 control-label">Filmes</label>
		    <div class="col-sm-10">
		    	<table class="table">
			    	@foreach($ator->filme as $filme)
			    	<tr style="text-align:justify; margin:7px 0 0 0;">
			    		<td>{{$filme->nome}}</td> 
			    		<td><a href="/cinema/elencos/editar/deleteFilme/{{$filme->id}}/{{$ator->id}}" class="glyphicon glyphicon-trash"></a></td>
			    	</tr>
			    	@endforeach
			    	<br>
			    	<tr>
			    		<td><a href="" id="abrirModal" data-toggle="modal" data-target="#exampleModal">Adicionar Filme</a></td>
					</tr>
				</table>
		    </div>
		</div>
		<!-- Modal -->
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#abrirModal").click(function (){ 
			        $('#exampleModal').modal('hide');
			    });
			    $('#link_modal').select(function (){
			    	$('#exampleModal').modal('close');
			    });
			});
		</script>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				  	<div class="modal-header">
					    <h4 class="modal-title" id="exampleModalLabel">Selecione um filme</h4>
					    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
			  				<span class="span" aria-hidden='true'>&times;</span>
			  			</button>
				  	</div>
				  	<div class="modal-body">
				  		<table id="table-modal" class="table">
					    @foreach($filmes as $filme)
					    	@if(!$ator->filme->contains($filme))
						    	<tr style="text-align:justify; margin:7px 0 0 0;">
						    		<td>{{$filme->nome}}</td> 
						    		<td><a href="/cinema/elencos/editar/addFilme/{{$filme->id}}/{{$ator->id}}" id="link_modal" class="btn btn-primary">Adicionar Filme</a></td>
						    	</tr>
						   	@endif
				    	@endforeach <!--Saber pq está dando certo em uns e outros não-->
				    	<br>
				    	</table>
				    	{{ $filmes->links() }}
				  	</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<div style="float: right">
			<a href="/cinema/elencos/" style="color: white" class="btn btn-danger">Cancelar</a>
			<input type="submit" value="Salvar" class="btn btn-success">
		</div>
	</form>
@stop