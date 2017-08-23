@extends('principal')

@section('conteudo')

<h1>Editar Procedimento</h1>

<form class="form-inline" action="/procedimentos/{{ $procedures->id }}" method="post">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <div class="form-group">
      <label for="name">Nome:</label>
      <input type="text" name="name" value="{{$procedures->name}}">
  </div>
  <div class="form-group">
      <label for="price">Preço:</label>
      <input type="text" name="price" value="{{$procedures->price}}">
  </div>
  <div class="form-group">
    <input type="submit" name="botaoSalvar" value="Salvar">
  </div>
</form>

@endsection
