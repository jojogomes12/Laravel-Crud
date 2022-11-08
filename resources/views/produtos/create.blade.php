

@extends('produtos.main')


@section('title' ,'Cadastrar')
@section('content')
<form  name="FormCadastro" class='registros' >
@csrf
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



@if(isset($_POST['{{$salvar}}'])) {


}
@endif
@endsection



