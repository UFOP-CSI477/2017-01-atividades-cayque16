@extends('principal')

@section('conteudo')

<h1>Confirmar Exclusão do Procedimento</h1>
<a href="/procedimentos">Voltar</a>

<p>Nome: {{ $procedures->name }}</p>
<p>Preço: R${{ $procedures->price }}</p>

<form method="post" action="/procedimentos/{{ $procedures->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar exclusão">

</form>

@endsection
