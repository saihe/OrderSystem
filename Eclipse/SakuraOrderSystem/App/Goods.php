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

	//商品番号から商品情報を検索
	function getGoods($goods, $goodsNo){
		return $goods[$goodsNo][0] . "\t" . $goods[$goodsNo][1] . "円";
	}

	//商品一覧をテーブルに表示し、ボタンを押すと商品が注文リストに追加される
	function getAllGoods($goods){
		foreach ($goods as $val){
			print "<tr><td>" . $val[0] . "</td><td>" . $val[1] . "円</td><td><input type='button' value='追加'></td></tr>";
		}
	}
?>