<?php
class SelectGoodsController{
	//フィールド
	private $sgm;
	private $foods;
	private $drinks;

	//コンストラクタ
	public function __construct(){
		//商品取得モデルのインスタンス
		require_once '/Model/SelectGoodsModel';
		$this -> sgm = new SelectGoodsModel();
		$this -> foods = array();
		$this -> drinks = array();
	}

	//getter
	public function getFoods(){
		$foods = $sgm -> executeGoods("SELECT id, name, price FROM foods");
		return $this -> foods;
	}

	public function getDrinks(){
		$drinks = $sgm -> executeGoods("SELECT id, name, price FROM drinks");
		return $this -> drinks;
	}
}
?>