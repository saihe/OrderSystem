<?php
	//商品を保存しておくクラス
	/*
	 *商品コード
	 *D: ドリンク
	 *F: フード
	 *
	 */
	$allGoods = array(
			"F001" => array("枝豆", 300),
			"F002" => array("たこわさ", 300),
			"D001" => array("ビール", 500),
			"D002" => array("日本酒", 500)
	);

	function getGoods($goodsNo){
		return $allGoods[$goodsNo];
	}

	print(getGoods("F001"));
?>