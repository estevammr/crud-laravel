@extends ('layout.principal')
@section('conteudo')

<h1>Editar produto : {{ $p->nome }}</h1>

<form action="/produtos/update/{{ $p->id }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ $p->nome }}"/>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" class="form-control" value="{{ $p->descricao }}"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" class="form-control" type="number" value="{{ $p->valor }}"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quantidade" class="form-control" type="number" value="{{ $p-> quantidade}}"/>
  </div>
  <div class="form-group">
    <label>Tamanho</label>
    <input name="tamanho" class="form-control" value="{{ $p-> tamanho}}"/>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Editar</button>
</form>
@stop