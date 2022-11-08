
@extends('produtos.main')


@section('title' ,'Editar')
@section('content')

<form  name="FormEdit" >
@csrf

    <lable for="">Nome</lable><br/>
    <input type="text" name="nome" required value="{{$produto->Nome}}"><br/>
    <lable for="">Descrição</lable><br/>
    <input type="text" name="Descricao" required value="{{ $produto->Descricao}}"><br/>
    <lable for="">Voltagem</lable><br/>
    <input type="text" name="Voltagem" id="Numero"  class="numero" required  value="{{$produto->Voltagem}}"><br/>

    <lable for="">Custo</lable><br/>

    <input type="text" name="custo" id="Numero" class="numero"   value="{{ $produto->custo}}"><br/>
    <lable for="">Preco</lable><br/>
    <input type="text" name="preco" id="Numero" class="numero" value="{{ $produto->preco}}"><br/>
    <lable for="">Quantidade</lable><br/>
    <input type="number-" name="quantidade" id="Numero"  class="numero" value="{{ $produto->quantidade}}"><br/>
    <select name="marcas"  value="{{$produto->marca}}><br/>
  <option value="">Marcas</option>
  <option value="Electrolux">Electrolux</option>
  <option value="Brastemp">Brastemp</option>
  <option value="Fischer">Fischer</option>
  <option value="Samsung">Samsung</option>
  <option value="LG">LG</option>
</select>
    <br><button>Salvar</button>
</form>



@endsection

