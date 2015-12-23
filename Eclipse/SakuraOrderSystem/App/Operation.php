<?php
// Goodsクラスの読み込み
require_once 'Goods.php';

$res = "";

//注文する
if (isset ( $_POST ["submit"] )) {
	// GoodsクラスのgetGoods()を使う
	$res = getGoods ( $allGoods, $_POST["goodsNo"] );
}else{
	$res = "";
}
?>
<html>
<head>
</head>
<body>
<!-- 商品一覧 -->
	<table >
		<tr>
			<th>商品名</th>
			<th>値段</th>
		</tr>
		<?php getAllGoods($allGoods)?>
	</table>

	<form method="post" action="">
		 <input type="submit" name="submit" value="送信">
	</form>

<!-- 注文商品出力 -->
	<p><?php print $res; ?></p>

</body>
</html>