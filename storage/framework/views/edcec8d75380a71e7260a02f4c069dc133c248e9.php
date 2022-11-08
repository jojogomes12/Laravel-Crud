<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">

<?php $__env->startSection('title' ,'Lista'); ?>
<?php $__env->startSection('content'); ?>
<table class="table">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Marca</th>
    <th>Voltagem</th>
    <th>Preço</th>
    <th>quantidade</th>
    <th>Data</th>
    <th>Opções</th>
  </tr>
<?php $__currentLoopData = $produto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
    <th><?php echo e($pro['id']); ?></th>
    <th><?php echo e($pro['Nome']); ?></th>
    <th><?php echo e($pro['Marca']); ?></th>
    <th><?php echo e($pro['Voltagem']); ?>V</th>
    <th>R$ <?php echo e($pro['preco']); ?></th>
    <th><?php echo e($pro['quantidade']); ?></th>
     <th><?php echo e($pro['created_at']->format('d/m/Y')); ?> </th>

     <th><a href="/produtos/editar/<?php echo e($pro['id']); ?>">Editar</a>
     <a href="/produtos/excluir/<?php echo e($pro['id']); ?>">Excluir</a>

    </th>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produtos.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/list.blade.php ENDPATH**/ ?>