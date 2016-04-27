@extends('layout.principal')

@section('conteudo')
  <h1>Detalhes do produto : {{ $p->nome }}</h1>
  <div class="container">
    <ul class="list-group">
      <li class="list-group-item">
        <b>Valor:</b> R$ {{ $p->valor }}
      </li>
      <li class="list-group-item">
        <b>Descrição:</b> {{ $p->descricao }}
      </li>
      <li class="list-group-item">
        <b>Quantidade em estoque:</b> {{ $p->quantidade }}
      </li>
      <li class="list-group-item">
        <b>Tamanho em (cm):</b> {{ $p->tamanho }}
      </li>
    </ul>
  </div>
@stop