@extends('produtos.main')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">

@section('title' ,'Lista')
@section('content')
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
@foreach($produto as $pro )

<tr>
    <th>{{$pro['id'] }}</th>
    <th>{{$pro['Nome'] }}</th>
    <th>{{$pro['Marca'] }}</th>
    <th>{{$pro['Voltagem'] }}V</th>
    <th>R$ {{$pro['preco'] }}</th>
    <th>{{$pro['quantidade'] }}</th>
     <th>{{$pro['created_at']->format('d/m/Y')}} </th>

     <th><a href="/produtos/editar/{{$pro['id'] }}">Editar</a>
     <a href="/produtos/excluir/{{$pro['id'] }}">Excluir</a>

    </th>
  </tr>
  @endforeach
</table>
@endsection
