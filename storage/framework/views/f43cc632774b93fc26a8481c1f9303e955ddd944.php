<?php $__env->startSection('title' ,'Editar'); ?>
<?php $__env->startSection('content'); ?>

<form  name="FormEdit" >
<?php echo csrf_field(); ?>

    <lable for="">Nome</lable><br/>
    <input type="text" name="nome" required value="<?php echo e($produto->Nome); ?>"><br/>
    <lable for="">Descrição</lable><br/>
    <input type="text" name="Descricao" required value="<?php echo e($produto->Descricao); ?>"><br/>
    <lable for="">Voltagem</lable><br/>
    <input type="text" name="Voltagem" id="Numero"  class="numero" required  value="<?php echo e($produto->Voltagem); ?>"><br/>

    <lable for="">Custo</lable><br/>

    <input type="text" name="custo" id="Numero" class="numero"   value="<?php echo e($produto->custo); ?>"><br/>
    <lable for="">Preco</lable><br/>
    <input type="text" name="preco" id="Numero" class="numero" value="<?php echo e($produto->preco); ?>"><br/>
    <lable for="">Quantidade</lable><br/>
    <input type="number-" name="quantidade" id="Numero"  class="numero" value="<?php echo e($produto->quantidade); ?>"><br/>
    <select name="marcas"  value="<?php echo e($produto->marca); ?>><br/>
  <option value="">Marcas</option>
  <option value="Electrolux">Electrolux</option>
  <option value="Brastemp">Brastemp</option>
  <option value="Fischer">Fischer</option>
  <option value="Samsung">Samsung</option>
  <option value="LG">LG</option>
</select>
    <br><button>Salvar</button>
</form>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('produtos.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/edit.blade.php ENDPATH**/ ?>