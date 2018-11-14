@extends('layout')

@section('conteudo-principal')

<div class="container">

<br>

<form method="POST" action="/produtos/editar/produtos">
	{!! csrf_field() !!}
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" type="text" value="{{$produto['nome']}}" name="nome">
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<input class="form-control" type="text" value="{{$produto['descricao']}}" name="descricao">
	</div>
	<div class="form-group">
		<label>Preço</label>
		<input class="form-control" type="text" value="{{$produto['preco']}}" name="preco">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input class="form-control" type="text" value="{{$produto['quantidade']}}" name="quantidade">
	</div>
	<button type="submit">Criar Produto</button>
</form>

</div>


@stop