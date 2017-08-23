@extends('principal')
@section('conteudo')
    <div class="container">
      <div align="right">
        <a href="/procedimentos/create" class="btn btn-success btn-md">Inserir novo procedimento</a> <br><br>
      </div>
      <h2>Listagem de todos procedimentos</h2>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
        @foreach($procedures as $p)
          <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>R${{ $p->price }}</td>
            <td><a href="/procedimentos/{{ $p->id }}/edit"class="btn btn-info"> Editar </a></td>
            <td><a href="/procedimentos/{{ $p->id }}/"class="btn btn-danger"> Excluir </a></td>
          </tr>
        @endforeach
    </table>

    </div>
@endsection
