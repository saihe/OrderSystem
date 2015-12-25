<?php
// Goodsクラスの読み込み
require_once 'Goods.php';

$goods = new Goods();

$res = "";

$selectGoods;

$count;

//注文する
if (isset ( $_POST ["submit"] )) {
	// GoodsクラスのgetGoods()を使う
	$res = $goods -> selectGoods ( $_POST["goodsNo"] );
}else{
	$res = "";
}
?>
<html>
<head>
<script type="text/javascript">
	var hide;
	var cnt;
	//商品番号 => count;
	var count = array();

	function onLoad(){
		hide= document.getElementById("count");
		cnt = document.getElementById("cnt");
	}

	function onClick(){
		count++;
		cnt.textContent = count;
		hide.value = count;
	}

</script>
</head>
<body>
<!-- 商品一覧 -->
	<table >
		<tr>
			<th>商品名</th>
			<th>値段</th>
		</tr>
		<?php $goods -> selectAllGoods()?>
	</table>

	<form method="post" action="">
		 <input type="submit" name="submit" value="送信">
	</form>

<!-- 注文商品出力 -->
	<p><?php print $res; ?></p>

</body>
</html>