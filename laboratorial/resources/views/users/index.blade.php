@extends('principal')
@section('conteudo')
    <div class="container">
      <h2>Listagem de todos usuários do sistema</h2>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-Mail</th>
          <th>Tipo</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
        @foreach($users as $u)
          <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            @if ($u -> type == 1)
              <td>1-Administratdor</td>
            @elseif ($u -> type == 2)
              <td>2-Operador</td>
            @else ($u -> type == 3)
              <td>3-Cliente</td>
            @endif
            <td><a href="/users/{{ $u->id }}/edit"class="btn btn-info"> Editar </a></td>
            <td><a href="/users/{{ $u->id }}/"class="btn btn-danger"> Excluir </a></td>
          </tr>
        @endforeach
    </table>
    </div>
@endsection
