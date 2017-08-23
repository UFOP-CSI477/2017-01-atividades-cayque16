@extends('principal')
@section('conteudo')
    <div class="container">
      <h2>Listagem de todos procedimentos disponíveis</h2>
      <table class="table table-bordered">
        <tr>
          <th>Nome</th>
          <th>Preço</th>
        </tr>
        @foreach($procedures as $p)
          <tr>
            <td>{{ $p->name }}</td>
            <td>R${{ $p->price }}</td>
          </tr>
        @endforeach
    </table>
    <div align="right">
      <a class="btn btn-primary" href="/">Voltar</a>
    </div>
    </div>
@endsection
