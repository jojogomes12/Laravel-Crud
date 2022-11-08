<?php $__env->startSection('title' ,'teste'); ?>
<?php $__env->startSection('content'); ?>

<form name="FormTeste" action=" <?php echo e(route('teste')); ?>"  method="POST">
<?php echo csrf_field(); ?>

    <lable for="">Testando o produto aqui</lable><br/>
    <input type="text"  class="form-control" id="id" name="id" ><br/>


    <button class="btn btn-secondary btn-lg">Sim</button>

</form>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produtos.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/teste.blade.php ENDPATH**/ ?>