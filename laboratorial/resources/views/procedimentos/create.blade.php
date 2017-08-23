@extends('principal')

@section('conteudo')

<h1>Incluir novo procedimento</h1>

<form class="form-inline" action="/procedimentos" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user_id">Código do usuário:</label>
        <input type="text" name="user_id" value="{{ Auth::user()->id }}">
    </div>
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" name="price">
    </div>
    <div class="form-group">
      <input type="submit" name="botaoSalvar" value="Salvar">
    </div>
</form>

@endsection
