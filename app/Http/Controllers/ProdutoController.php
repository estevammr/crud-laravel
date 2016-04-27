<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use estoque\Produto;
use estoque\Http\Controllers\Input;
use estoque\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller {

  public function __construct() {

  $this->middleware('auth.basic');
  }
  
  public function lista() {
    
    $produtos = Produto::all();
    
    return view('produto.listagem')->with('produtos', $produtos);
  
  }

  public function mostra($id) {

    $produto = Produto::find($id);

    if (empty($produto)) {
      return "Esse produto não existe";
    }

    return view('produto.detalhes')->with('p', $produto);

  }

  public function novo() {
    
    return view('produto.formulario');

  }

  public function adiciona(ProdutosRequest $request) {

    $produto = new Produto();
    $input = $request->all();
    $produto->fill($input)->save();

    return redirect()->action('ProdutoController@lista');

  }

  public function listaJSON() {

    $produtos = Produto::all();
    
    return $produtos;

  }

  public function remove($id) {

    $produto = Produto::find($id);
    $produto->delete();

    return redirect()
        ->action('ProdutoController@lista');

  }

  public function edit($id) {
   
   $produto = Produto::find($id);
   
   return view('produto.edit')->with('p', $produto);

  }

  public function update($id, Request $request) {

    $produto = Produto::find($id);
    $input = $request->all();
    $produto->fill($input)->save();

    return redirect()
        ->action('ProdutoController@lista');

  }
}