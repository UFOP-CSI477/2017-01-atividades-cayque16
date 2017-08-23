@extends('principal')

@section('conteudo')
  <div class="btn-group btn-group-justified">
    <a href="/register" class="btn btn-link btn-lg">Novo paciente</a>
    <a href="/login" class="btn btn-link btn-lg">Login</a>
    <a href="/testes/create" class="btn btn-link btn-lg">Solicitar um exame</a>
    <a href="/listar" class="btn btn-link btn-lg">Listar exames</a>
  </div>
@endsection
