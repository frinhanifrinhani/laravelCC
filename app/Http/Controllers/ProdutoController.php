<?php
	
namespace estoque\Http\Controllers;

use Validator;
use estoque\Produto;
use Request;
use estoque\Http\Requests\ProdutosRequest;


class ProdutoController extends Controller{

	public function __construct()
	{
		$this->middleware('auth');
	}

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

	public function adiciona(ProdutosRequest $request){

		Produto::create($request->all());

		return redirect()
			->action('ProdutoController@lista')
			->withInput(Request::only('nome'));
	}

	public function listaJson(){
		$produtos = Produto::all();

		return response()->json($produtos);
	}

	public function edita($id){
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}

		return view('produto.formulario_edita')->with('p',$produto);
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()
			->action('ProdutoController@lista');
	}
}
?>