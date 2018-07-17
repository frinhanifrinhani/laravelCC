<?php
	
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
}

?>