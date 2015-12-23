<?php
	//商品を格納
	/*
	 * 商品コード
	 * F: フード
	 * D: ドリンク
	 */
	$allGoods =array(
			"F001" => array("枝豆", 300),
			"F002" => array("たこわさ", 200),
			"D001" => array("ビール", 500),
			"D002" => array("ウーロン茶", 200),
	);

	function getGoods($goods, $goodsNo){
		return $goods[$goodsNo][0] . "\t" . $goods[$goodsNo][1] . "円";
	}

?>