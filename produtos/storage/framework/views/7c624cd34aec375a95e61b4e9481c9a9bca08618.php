<?php $__env->startSection('conteudo'); ?>

	  <h1>Detalhes da Tarefa: <?php echo e($p->nome); ?> </h1>
	  <ul>
	    <li>
	      <b>Estado:</b> <?php echo e($p->estado); ?>

	    </li>
	    <li>
	      <b>Descrição:</b> <?php echo e($p->descricao); ?>

	    </li>
	  </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>