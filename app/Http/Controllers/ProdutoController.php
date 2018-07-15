<?php
	
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{
	
	public function lista(){
		$html = '<h1>Listagem de produtos com Laravel</h1>';
		$produtos = DB::select('select * from estoque_laravel.produtos');

		$html .= '<ul>';
			foreach ($produtos as $p){
				$html .= '<li> Nome: '. $p->nome . ', Descrição: '. $p->descricao .'</li>';
			}
		$html .= '</ul>';

		return $html;
	}
}

?>