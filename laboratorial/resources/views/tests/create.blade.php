@extends('principal')

@section('conteudo')

<h1>Solicitar um exame</h1>

<form class="form-inline" action="/testes" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user_id">Código do usuário:</label>
        <input type="text" name="user_id" value="{{ Auth::user()->id }}">
    </div>
    <div class="form-group">
        <label for="procedure_id">Selecione o procedimento:</label>
        <select name="procedure_id">
          <option value="">Selecione</option>
          @foreach($procedures as $p)
            <option value="{{ $p->id }}">{{ $p->name }}  R${{ $p->price }}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="date">Selecione a data:</label>
      <input type="text" name="date" placeholder="aaaa-mm-dd">
    </div>
    <div class="form-group">
      <input type="submit" name="botaoSalvar" value="Salvar">
    </div>
</form>

@endsection
