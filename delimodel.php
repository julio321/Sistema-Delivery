<?php
class deliveryModel{

    public static $itens = array(array('such1.jpg','20.80','chuchumi'),array('such2.jpg','60.00','hosomak'),array('such3.jpg','100.00','sashimi'));

	public static function listarItens(){
		return self::$itens;

	}

	public static function addToCart($idProduto){
		if(!isset($_SESSION['carrinho'])){
			$_SESSION['carrinho'] = array();
		}
		$_SESSION['carrinho'][] = $idProduto;
	}

	public static function getItensCart(){
		return $_SESSION['carrinho'];

	}

	public static function getItem($id){
		return self::$itens[$id];

	}

	public static function getTotalPedido(){
		$valor = 0;
		foreach ($_SESSION['carrinho'] as $key => $value) {
			$itemPreco = self::getItem($value)[1];
			$valor+=$itemPreco;
			
		}
		return $valor;

	}
}

?>