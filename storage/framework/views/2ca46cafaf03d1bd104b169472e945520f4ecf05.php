<?php $__env->startSection('title' ,'Cadastrar'); ?>
<?php $__env->startSection('content'); ?>
<form  name="FormCadastro" class='registros' >
<?php echo csrf_field(); ?>
    <lable for="">Nome</lable><br/>
    <input type="text" name="nome" id="nome" required><br/>
    <lable for="">Descrição</lable><br/>
    <input type="text" name="Descricao" id="Descricao" required><br/>
    <lable for="">Voltagem</lable><br/>
    <input type="text" name="Voltagem" class="numero" required><br/>
    <lable for="">Custo</lable><br/>
    <input type="text" name="custo" class="numero" required><br/>
    <lable for="">Preco</lable><br/>
    <input type="text" name="preco" class="numero" required><br/>
    <lable for="">Quantidade</lable><br/>
    <input type="number" name="quantidade"  value='0' class="numero" required><br/>
    <select name="marcas">
  <option value="">Marcas</option>
  <option value="Electrolux">Electrolux</option>
  <option value="Brastemp">Brastemp</option>
  <option value="Fischer">Fischer</option>
  <option value="Samsung">Samsung</option>
  <option value="LG">LG</option>
</select>
    <br><button name="salvar">Salvar</button>
</form>



<?php if(isset($_POST['<?php echo e($salvar); ?>'])): ?> {


}
<?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('produtos.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/create.blade.php ENDPATH**/ ?>