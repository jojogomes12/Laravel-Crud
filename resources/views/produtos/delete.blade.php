@extends('produtos.main')


@section('title' ,'Deletar')
@section('content')
<form  name="FormDelete">
@csrf

    <lable for="">Tem certeza que deseja excluir esse produto?</lable><br/>
    <input type="text"  class="form-control" id="ex3" name="nome" value="{{ $produto->Nome}}"><br/>
    <button class="btn btn-secondary btn-lg">Sim</button>

</form>
@endsection
