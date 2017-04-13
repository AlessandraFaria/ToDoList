@extends('layout.principal')

@section('conteudo')

<h1>Nova tarefa</h1>

<form action="/list/adiciona" method="post">
<input type="hidden" 
    name="_token" value="{{{ csrf_token() }}}" />
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control">
  </div>
  <div class="form-group">
    <label>Estado</label>
    <input name="estado" class="form-control">
  </div>
  <div class="form-group">
    <label>Descricao</label>
    <input name="descricao" class="form-control">
  </div>
  <button type="submit" class="btn 
    btn-primary btn-block">Submit</button>
</form>


@stop