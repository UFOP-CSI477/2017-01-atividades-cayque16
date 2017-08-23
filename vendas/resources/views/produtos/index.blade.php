@extends('principal')

@section('conteudo')

<center><h1>Produtos</h1></center>
<div align="right">
  <a href="/produtos/create" class="btn btn-success btn-md">Inserir novo produto</a> <br><br>
</div>
<table class="table table-condensed">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Editar</th>
    <th>Excluir</th>
  </tr>
  @foreach($produtos as $p)
  <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p-> nome }}</td>
    <td>R$ {{ $p-> preco}}</td>
    <td><a href="/produtos/{{ $p->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/produtos/{{ $p->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>
@endsection
