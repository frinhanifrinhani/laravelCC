<?php
	
namespace estoque\Http\Controllers;

use estoque\Produto;
use Request;
use estoque\Http\Request\ProdutosRequest;

class ProdutoController extends Controller{
	
	public function lista(){
		$produtos = Produto::all();
		if(view()->exists('produto.listagem')){
			return view('produto.listagem')->withProdutos($produtos);
		}
	}

	public function mostra($id){
		$produto = Produto::find($id);

		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->with('p',$produto);
	}

	public function novo(){

		return view('produto.formulario');
	}

	public function adiciona(){
		
		Produto::create($Request::all());

		return redirect()
			->action('ProdutoController@lista')
			->withInput(Request::only('nome'));
	
	}

	public function listaJson(){
		$produtos = Produto::all();

		return response()->json($produtos);
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()
			->action('ProdutoController@lista');
	}
}

?>