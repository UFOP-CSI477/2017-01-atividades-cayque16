@extends('principal')

@section('conteudo')
    <div class="container">
      <h2>Listagem de todos tipos de transação</h2>
      <table class="table table-bordered">
        <tr>
          <th>Código</th>
          <th>Nome</th>
        </tr>
        @foreach($tipo as $t)
          <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nome }}</td>
          </tr>
        @endforeach
    </table>
    </div>
@endsection
