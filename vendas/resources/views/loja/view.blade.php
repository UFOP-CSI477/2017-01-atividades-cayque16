@extends('principal')

@section('conteudo')
  <h1>Detalhes do produto</h1>

  Nome: {{ $produto->nome}}<br>
  Preço: {{ $produto-> preco }}<br>

  <form action="/carrinho/adicionar/{{$produto->id}}" method="post">

    {{ csrf_field() }}

    <input type="text" name="quantidade" value="1">
    <input type="submit" value="Inserir no carrinho">
  </form>

@endsection
