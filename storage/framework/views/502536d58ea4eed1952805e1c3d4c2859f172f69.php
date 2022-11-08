<?php $__env->startSection('title' ,'Deletar'); ?>
<?php $__env->startSection('content'); ?>
<form  name="FormDelete">
<?php echo csrf_field(); ?>

    <lable for="">Tem certeza que deseja excluir esse produto?</lable><br/>
    <input type="text"  class="form-control" id="ex3" name="nome" value="<?php echo e($produto->Nome); ?>"><br/>
    <button class="btn btn-secondary btn-lg">Sim</button>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('produtos.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/delete.blade.php ENDPATH**/ ?>