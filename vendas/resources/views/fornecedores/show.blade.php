@extends('principal')

@section('conteudo')

<h1>Excluir fornecedor</h1>
<a href="/fornecedores">Voltar</a>

<p>Id: {{ $fornecedor->id }}</p>
<p>Nome: {{ $fornecedor->nome }}</p>
<p>Preço R$: {{ $fornecedor->nomeFantasia }}</p>
<p>Preço R$: {{ $fornecedor->telefone }}</p>

<form method="post" action="/fornecedores/{{ $fornecedor->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar exclusão">

</form>

@endsection
