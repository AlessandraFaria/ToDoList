<?php $__env->startSection('conteudo'); ?>
   
    <?php if(empty($lista)): ?>

      <div class="alert alert-danger">
        Você não tem nenhuma tarefa cadastrada.
      </div>

    <?php else: ?>
    <h1>Lista de Tarefas</h1>
    <table class="table table-condensed">
       <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <tr>
        <td> <?php echo e($p->nome); ?></td>
        <td> -- <?php echo e($p->estado); ?></td>
         <td> 
           <a href="produtos/public/list/mostra/<?php echo e($p->id); ?>">
            <span class="glyphicon glyphicon-search"></span>
           </a>
        </td>
        <td>
           <a href="<?php echo e(action('ListaController@remove', $p->id)); ?>"> 
               <span class="glyphicon glyphicon-trash"></span>
           </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
    <?php endif; ?>
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>