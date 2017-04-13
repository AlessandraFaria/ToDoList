

<?php $__env->startSection('conteudo'); ?>

<h1>Novo produto</h1>

<form action="/produtos/adiciona" method="post">

 
  <?php echo e(csrf_field()); ?>

  
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control"/>
  </div>
  <div class="form-group">
    <label>Descricao</label>
    <input name="descricao" class="form-control"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" class="form-control"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" 
      name="quantidade" class="form-control"/>
  </div>
  <button type="submit" 
    class="btn btn-primary btn-block">Adicionar</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>