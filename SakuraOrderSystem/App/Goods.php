<?php
	class Goods{
		//商品を格納
		/**
		 * 商品コード
		 * F: フード
		 * D: ドリンク
		 * @param allGoods //商品一覧
		 */
		private $allGoods =array(
				"F001" => array("枝豆", 300),
				"F002" => array("たこわさ", 200),
				"D001" => array("ビール", 500),
				"D002" => array("ウーロン茶", 200),
		);

		/**
		 * $this -> 変数名
		 * @return array
		 */

		//商品番号から商品情報を検索
		public function selectGoods($goodsNo){
			return $this -> allGoods[$goodsNo][0] . "\t" . $this -> allGoods[$goodsNo][1] . "円";
		}

		//商品一覧をテーブルに表示し、ボタンを押すと商品が注文リストに追加されるようにしたい
		public function selectAllGoods(){
			foreach ($this -> allGoods as $key => $val){
				print "<tr><td>" . $val[0] . "</td><td>" . $val[1] . "円</td><td><input type='button' value='追加'></td><td><input type='hidden' id='" . $key . "'></td></tr>";
			}
		}

		public function getAllGoods(){
			return $this -> allGoods;
		}
	}
?>