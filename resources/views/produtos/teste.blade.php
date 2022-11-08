@extends('produtos.main')


@section('title' ,'teste')
@section('content')

<form name="FormTeste" action=" {{ route('teste') }}"  method="POST">
@csrf

    <lable for="">Testando o produto aqui</lable><br/>
    <input type="text"  class="form-control" id="id" name="id" ><br/>


    <button class="btn btn-secondary btn-lg">Sim</button>

</form>
<meta name="csrf-token" content="{{csrf_token() }}">
@endsection
