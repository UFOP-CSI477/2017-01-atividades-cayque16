@extends('principal')

@section('conteudo')

<center><h1>Fornecedores</h1></center>
<div align="right">
  <a href="/fornecedores/create" class="btn btn-success btn-md">Inserir novo fornecedor</a><br><br>
</div>
<table class="table table-condensed">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Nome Fantasia</th>
    <th>Telefone</th>
    <th>Editar</th>
    <th>Excluir</th>
  </tr>
  @foreach($fornecedores as $f)
  <tr>
    <td>{{ $f->id }}</td>
    <td>{{ $f-> nome }}</td>
    <td>{{ $f-> nomeFantasia}}</td>
    <td>{{ $f-> telefone }}</td>
    <td><a href="/fornecedores/{{ $f->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/fornecedores/{{ $f->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>
@endsection
