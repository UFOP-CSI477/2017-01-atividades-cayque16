@extends('principal')

@section('conteudo')
  <div class="btn-group btn-group-justified">
    <a href="/login" class="btn btn-link btn-lg">Login</a>
    <a href="/trans/create" class="btn btn-link btn-lg">Incluir uma transação</a>
    <a href="/trans" class="btn btn-link btn-lg">Listar transações</a>
  </div>
@endsection
