<?php $__env->startSection('conteudo'); ?>

<h1>Nova tarefa</h1>

<form action="/list/adiciona" method="post">
<input type="hidden" 
    name="_token" value="<?php echo e(csrf_token()); ?>" />
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>