@extends('principal')

@section('conteudo')
    <div class="container">
      <div align="right">
        <a href="/testes/create" class="btn btn-success btn-md">Agendar novo procedimento</a> <br><br>
      </div>
      <h2>Listagem de todos procedimentos agendados</h2>
      <table class="table table-bordered">
        <tr>
          <th>Nome</th>
          <th>Data</th>
          <th>Preço</th>
          <th>Editar</th>
          <th>Cancelar</th>
        </tr>
        @foreach($tests as $t)
          <tr>
            <td>{{ $t->procedure->name }}</td>
            <td>{{ $t->date }}</td>
            <td>R${{ $t->procedure->price }}</td>
            <td><a href="/listar/{{ $t->id }}/edit"class="btn btn-info"> Editar </a></td>
            <td><a href="/listar/{{ $t->id }}/"class="btn btn-danger"> Excluir </a></td>
          </tr>
        @endforeach
        <tr>
          <td colspan="3">Total de exames solicitados:</td>
          <td colspan="2">{{ $nTests }}</td>
        </tr>
        <tr>
          <td colspan="3">Valor total:</td>
          <td colspan="2">R${{ $valor }}</td>
        </tr>
    </table>
    <div align="right">

    </div>
    </div>
@endsection
