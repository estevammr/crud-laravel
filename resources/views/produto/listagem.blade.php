@extends('layout.principal')
@section('conteudo')
  
  @if(empty($produtos))
  <br>
  <div class="alert alert-danger">
    Não há nenhum produto cadastrado.
  </div>

  @else

  <h1>Listagem de produtos</h1>
  <div class="table-responsive">
  <table class="table table-striped">
    <tr>
      <th>Nome</th>
      <th>Valor</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Tamanho</th>
      <th>Ação</th>
    </tr> 
    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->quantidade }}</td>
      <td>{{ $p->tamanho }}</td>
      <td>
        <a href="{{ action('ProdutoController@mostra', $p->id) }}">
          <span class="glyphicon glyphicon-search"></span>
        </a>
         <a href="{{ action('ProdutoController@remove', $p->id) }}">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
        <a href="{{ action('ProdutoController@edit', $p->id) }}">
          <span class="glyphicon glyphicon-edit"></span>
        </a>
      </td>
    </tr>
    @endforeach 
  </table>
  </div>
  @endif

  <h4>
    <span class="label label-danger pull-right">
      Um ou menos itens no estoque
    </span>
  </h4>

  @if(old('nome'))
    <div class="alert alert-sucess">
      <strong>Sucesso!</strong>
        O produto {{ old('nome') }} foi adicionado/editado.
    </div>
  @endif

@stop  




