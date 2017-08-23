@extends('principal')

@section('conteudo')
<h1>Carrinho de compras</h1>

<a href="/carrinho/comprar" class="btn btn-success">Comprar</a><br>

@if(Session::has('carrinho'))
  @php
    $carrinho = Session::get('carrinho');

  @endphp

  @foreach($carrinho as $c)
    Código do produto: {{$c ->produto_id  }}<br>
    Nome do produto: {{$c->produto-nome}}<br>
    Quantidade: {{$c->quantidade}}<br><br>
  @endforeach

@else
  <p class="alert alert-warning">Não existe nenhum produto no carrinho.</p>
@endif

@endsection
