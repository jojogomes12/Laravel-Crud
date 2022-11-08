<?php

namespace App\Http\Controllers;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Psy\Exception\Exception;

class ProdutosController extends Controller
{
    //Cadastrar Produtos
    public function create(){

        return view('produtos.create');

    }
    public function store(Request $request ){
        date_default_timezone_set('America/Sao_Paulo');

      Produto::create([
      'Nome'=>$request->nome,
      'custo'=>$request->custo,
      'preco'=>$request->preco,
      'quantidade'=>$request->quantidade,
      'Marca'=>$request->marcas,
      'Voltagem'=>$request->Voltagem,
      'Descricao'=>$request->Descricao,
      'salvar'=>$request->salvar,
      ]);



      $nome['success']=false;
      $nome['message']='Registrado com Sucesso!!!';
      echo json_encode($nome);
      return;
    }

    //Vizualizar Produtos
public function show($id){


    $produto=Produto::findOrFail($id);


   return view('produtos.show',['produto'=>$produto]);

}
public function edit($id){
    $produto=Produto::findOrFail($id);
   return view('produtos.edit',['produto'=>$produto]);


}
//Atualizar Produtos
public function update(Request $request, $id){
    $produto=Produto::findOrFail($id);
    $produto->update([

    'Nome'=>$request->nome,
    'custo'=>$request->custo,
    'preco'=>$request->preco,
    'quantidade'=>$request->quantidade,
    'Marca'=>$request->marcas,
      'Voltagem'=>$request->Voltagem,
      'Descricao'=>$request->Descricao,
    ]);

    $url = "http://localhost:8000/";

    $nome['success']=false;
    $nome['message']='Alterado com sucesso!!!';
    echo json_encode($nome);


    return;
}



//Buscar Produtos
public function buscar(Request $request){
    $data = [
        'success' => true,
        'message' => 'Sucesso!'
      ];

       $id = $request->input('id');
       $prod = DB::table('produtos')->where('id', $id)->first();

       if(empty($prod)){
          $data['success']=false;
          $data['message']='Não encontrado!!!';

       }

       return response()->json($data);


}



public function delete($id){
    $produto=Produto::findOrFail($id);
    return view('produtos.delete',['produto'=>$produto]);

}

//Excluir Produtos
public function destroy($id){
    $produto=Produto::findOrFail($id);
    $produto->delete();
    $url = "http://localhost:8000/";

    $nome['success']=false;
    $nome['message']='Deletado com sucesso!!!';
    echo json_encode($nome);


    return;



}

//Lista os produtos

public function listar(){
$produto=Produto::all();
    return view('produtos.list',['produto'=>$produto]);
}
}
