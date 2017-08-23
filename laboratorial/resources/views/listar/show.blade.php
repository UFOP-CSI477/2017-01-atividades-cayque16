@extends('principal')

@section('conteudo')

<h1>Cancelar agendamento</h1>
<a href="/listar">Voltar</a>

<p>Nome: {{ $tests->procedure->name }}</p>
<p>Data: {{ $tests->date }}</p>
<p>Preço R$: {{ $tests->procedure->price }}</p>

<form method="post" action="/listar/{{ $tests->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar cancelamento">

</form>

@endsection
