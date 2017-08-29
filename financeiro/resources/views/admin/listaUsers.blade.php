@extends('principal')

@section('conteudo')
    <div class="container">
      <h2>Listagem de todos clientes</h2>
      <table class="table table-bordered">
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>E-Mail</th>
        </tr>
        @foreach($user as $u)
          <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
          </tr>
        @endforeach
    </table>
    </div>
@endsection
