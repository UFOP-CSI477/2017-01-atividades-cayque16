@extends('principal')

@section('conteudo')

<h1>Confirmar Exclusão de Usuário</h1>
<a href="/users">Voltar</a>

<p>Nome: {{ $users->name }}</p>
<p>E-Mail: {{ $users->email }}</p>
@if ($users -> type == 1)
  <p>1-Administratdor</p>
@elseif ($users -> tipo == 2)
  <p>2-Operador</p>
@else ($users -> tipo == 3)
  <p>3-Cliente</p>
@endif

<form method="post" action="/users/{{ $users->id }}">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar exclusão">

</form>

@endsection
