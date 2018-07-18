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
		if(view()->exists('listagem')){
			return view('listagem')->withProdutos($produtos);
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
		return view('detalhes')->with('p',$resposta[0]);
	}
}

?>