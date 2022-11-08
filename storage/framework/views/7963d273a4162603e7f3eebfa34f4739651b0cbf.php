<!DOCTYPE html>
<html lang="pt-br">
    <head>
       <meta charset="UTF-8">
       <meta namespace="viewport" content="width=device-width,inicial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie-edge">
       <title>Ver um produto</title>
</head>
<body>

    <lable for="">Nome</lable><br/>
    <input type="text" name="nome" value=" <?php echo e($produto->Nome); ?>"><br/>
    <lable for="">Custo</lable><br/>
    <input type="text" name="custo"  value=" <?php echo e($produto->custo); ?>"><br/>
    <lable for="">Preco</lable><br/>
    <input type="text" name="preco"  value=" <?php echo e($produto->preco); ?>"><br/>
    <lable for="">Quantidade</lable><br/>
    <input type="text" name="quantidade"  value=" <?php echo e($produto->quantidade); ?>"><br/>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-crud\crud_basico\resources\views/produtos/show.blade.php ENDPATH**/ ?>