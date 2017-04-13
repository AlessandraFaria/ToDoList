<?php $__env->startSection('conteudo'); ?>
   
    <?php if(empty($lista)): ?>

      <div class="alert alert-danger">
        Você não tem nenhuma tarefa cadastrada.
      </div>

    <?php else: ?>
    <h1>Listagem de Tarefas</h1>
    <table class="table table-condensed">
       <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <tr>
        <td> <?php echo e($p->nome); ?></td>
        <td> -- <?php echo e($p->estado); ?></td>
         <td> 
           <a href="/list/mostra/<?php echo e($p->id); ?>">
            Visualizar
           </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
    <?php endif; ?>
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>