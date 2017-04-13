@extends('layout.principal')
@section('conteudo')
   
    @if(empty($lista))

      <div class="alert alert-danger">
        Você não tem nenhuma tarefa cadastrada.
      </div>

    @else
    <h1>Lista de Tarefas</h1>
    <table class="table table-condensed">
       @foreach ($lista as $p)
      <tr>
        <td> {{ $p->nome }}</td>
        <td> -- {{ $p->estado }}</td>
         <td> 
           <a href="produtos/public/list/mostra/{{$p->id}}">
            <span class="glyphicon glyphicon-search"></span>
           </a>
        </td>
        <td>
           <a href="{{action('ListaController@remove', $p->id)}}"> 
               <span class="glyphicon glyphicon-trash"></span>
           </a>
        </td>
      </tr>
      @endforeach 
    @endif
@stop      