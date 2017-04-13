@extends('layout.principal')
@section('conteudo')

	  <h1>Detalhes da Tarefa: {{ $p->nome }} </h1>
	  <ul>
	    <li>
	      <b>Estado:</b> {{ $p->estado }}
	    </li>
	    <li>
	      <b>Descrição:</b> {{ $p->descricao }}
	    </li>
	  </ul>
@stop