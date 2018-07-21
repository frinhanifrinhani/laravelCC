<?php
	
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{
	
	public function lista(){
		
		$produtos = DB::select('select * from estoque_laravel.produtos');
		
		//formas de retorno de para view
		//return view('listagem')->with('produtos',$produtos);
		//return view('listagem')->withProdutos($produtos);
		//return view('listagem',['produtos' => $produtos]);
		/*
			$data = ['produtos' => $produtos];
			return view('listagem',$data);
		*/
		if(view()->exists('produto.listagem')){
			return view('produto.listagem')->withProdutos($produtos);
		}
	}

	public function mostra($id){
		//$id = Request::input('id');
		//$id = Request::input('id','0');
		//$id = Request::route('id','0');
		$resposta = 
			DB::select('select * from estoque_laravel.produtos where id = ? ',[$id]);
			//echo "<pre>";
			//var_dump($resposta);die;
		if(empty($resposta)){
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->with('p',$resposta[0]);
	}

	public function novo(){

		return view('produto.formulario');
	}

	public function adiciona(){
		
		$nome 		= Request::input('nome');
		$descricao	= Request::input('descricao');
		$valor		= Request::input('valor');
		$quantidade	= Request::input('quantidade');

		DB::insert('insert into estoque_laravel.produtos 
		(nome,valor,quantidade,descricao)values(?,?,?,?)',
		array($nome,$valor,$quantidade,$descricao));


		//return redirect('/produtos')
		return redirect()
			->action('ProdutosController@lista')
			->withInput(Request::only('nome'));
	
	}

	public function listaJson(){
		$produtos = DB::select('select * from estoque_laravel.produtos');
		//return $produtos;
		return response()->json($produtos);
	}
}

?>