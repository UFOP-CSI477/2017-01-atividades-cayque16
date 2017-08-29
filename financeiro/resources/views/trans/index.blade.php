@extends('principal')

@section('conteudo')
    <div class="container">
      <h2>Listagem de todas as suas transações</h2>
      <table class="table table-bordered">
        <tr>
          <th>Nome</th>
          <th>Data</th>
          <th>Valor</th>
          <th>Operação</th>
        </tr>
        @foreach($tran as $t)
          <tr>
            <td>{{ $t->tipo->nome }}</td>
            <td>{{ $t->data }}</td>
            <td>{{ $t->valor }}</td>
            @if($t->credito == 1)
              <td>Crédito</td>
            @else
              <td>Débito</td>
            @endif
          </tr>
        @endforeach
        <tr>
          <td colspan="2">Total de créditos:</td>
          <td colspan="2">{{ $nCre }}</td>
        </tr>
        <tr>
          <td colspan="2">Total de débitos:</td>
          <td colspan="2">{{ $nDeb }}</td>
        </tr>
    </table>
    </div>
@endsection
