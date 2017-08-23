@extends('principal')

@section('conteudo')

<h1>Editar Usuário</h1>

<form class="form-inline" action="/users/{{ $users->id }}" method="post">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <div class="form-group">
      <label for="name">Nome:</label>
      <input type="text" name="name" value="{{$users->name}}">
  </div>
  <div class="form-group">
      <label for="email">E-Mail:</label>
      <input type="text" name="email" value="{{$users->email}}">
  </div>
  <div class="form-group">
    <label for="type">Tipo:</label>
    <select name="type">
      <option value="">Selecione:</option>
      <option value="1">1-Administrador</option>
      <option value="2">2-Operador</option>
      <option value="3">3-Cliente</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" name="botaoSalvar" value="Salvar">
  </div>
</form>

@endsection
