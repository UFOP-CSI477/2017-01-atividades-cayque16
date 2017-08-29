@extends('principal')

@section('conteudo')

<h2>Incluir uma transação:</h2>

<form class="form-inline" action="/trans" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user_id">Código do usuário:</label>
        <input type="text" name="user_id" value="{{ Auth::user()->id }}">
    </div>
    <div class="form-group">
        <label for="tipo_id">Selecione a transação:</label>
        <select name="tipo_id">
          <option value="">Selecione:</option>
          @foreach($tipo as $t)
            <option value="{{ $t->id }}">{{ $t->nome }}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="data">Digite a data:</label>
      <input type="text" name="data" placeholder="aaaa-mm-dd">
    </div>
    <div class="form-group">
      <label for="valor">Digite o valor:</label>
      <input type="text" name="valor" placeholder="00.00">
    </div>
    <div class="">
      <label for="credito">Selecione a operação:</label>
      <select name="credito">
        <option value="">Selecione:</option>
        <option value="1">Crédito</option>
        <option value="0">Débito</option>
      </select>
    </div>
    <div class="form-group">
      <input type="submit" name="botaoSalvar" value="Salvar">
    </div>
</form>


@endsection
