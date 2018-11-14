@extends('layout')

@section('conteudo-principal')

<br>

<div class="container">
	<div class="row">
		<div class="col">
			<a class=" btn-block btn btn-success" href="/produtos/criar-produto">Criar Produto</a>	
			<br>		
		</div>
	</div>

	<div class="row">
		<div class="col">
			<form action="" method="get">
				<div class="form-group">
				<input class="form-control" value="{{$busca}}"type="text" name="busca"/>
				</div>

				<div class="form-group">
				<button class="btn btn-info btn-block" type="submit">Pesquisar</button>				
				</div>

				@if ($busca)
					
					<div class="form-group">
					<a class="btn btn-info btn-danger" href="/produtos">Limpar busca</a>
					</div>
				@endif

			</form>
		</div>
	</div>


@if(count($produtos))

<div class="row">

<table class="table table-hover table-bordered table-dark">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Quantidade</th>
				<th>Preço</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
				<tr>
					<td>{{ $produto['id'] }}</td>
					<td>{{ $produto['nome'] }}</td>
					<td>{{ $produto['descricao'] }}</td>
					<td>{{ $produto['quantidade'] }}</td>
					<td
						@if($produto['preco'] < 2)
							class="bg-danger"
						@else
							class="bg-success"
						@endif
					>
						{{ $produto['preco'] }}
					</td>
					<td>
					<a class="btn btn-primary" href="/produtos/{{$produto['id']}}/editar">Editar</a>
					<button class="btn btn-secondary">Deletar</button>
							
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</div>
</div>

@else 

 <div class="alert alert-danger">
 	Não foi lozalizado produtos com o filtro {{$busca}}
 </div>

 @endif

@stop