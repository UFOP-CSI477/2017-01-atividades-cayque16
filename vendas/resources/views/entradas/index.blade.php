@extends('principal')

@section('conteudo')

<center><h1>Entradas</h1></center>
<div align="right">
  <a href="/entradas/create" class="btn btn-success btn-md">Inserir uma nova entrada</a> <br><br>
</div>
<table class="table table-condensed">
  <tr>
    <th>ID</th>
    <th>Produto</th>
    <th>Fornecedor</th>
    <th>Quantidade</th>
    <th>Data</th>
    <th>Editar</th>
    <th>Excluir</th>
  </tr>
  @foreach($entradas as $a)
  <tr>
    <td>{{ $a->id }}</td>
    <td>{{ $a-> produto -> nome }}</td>
    <td>{{ $a-> fornecedores -> nome}}</td>
    <td>{{ $a-> quantidade}}</td>
    <td>{{ $a->created_at }}</td>
    <td><a href="/entradas/{{ $a->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/entradas/{{ $a->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>
@endsection
