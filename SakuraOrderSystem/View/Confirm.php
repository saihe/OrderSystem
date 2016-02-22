<?php
	//フォームデータ格納用
	$postArray = array();
	$total = 0;
	foreach($_POST as $key => $val){
		//nameにCountが含まれている場合配列に格納
		if(strstr($key, "Count")){
			//substrでF001などの商品番号を取得しPriceを文字列連結することでpriceを取得
			$postArray[$key] = array("name" => $_POST[substr($key, 0, 4) . "Name"], "price" => $_POST[substr($key, 0, 4) . "Price"],"amount" => $_POST[$key]);
		}
	}
	if($_POST["total"] != 0){
		$total = $_POST["total"];
	}
	//print_r($postArray);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>注文確認</title>
<script>
	function onClick(operator){
		//確定ボタンが押されたら出す
		if(operator == "+"){
			alert("注文されました");
		}
		//キャンセルボタンが押されたら出す
		if(operator == "-"){
			alert("キャンセルされました");
		}
	}

</script>
</head>
<body onLoad="onLoad()">
	<p>以下の商品を注文します</p>
	<form method="post" action="index.php">
		<table>
			<tr><th>商品名</th><th>値段</th><th>数量</th></tr>
		<?php
			foreach ($postArray as $key => $val){
				if($val["amount"] != 0){
					echo "<tr>";
					foreach($val as $key => $val){
						echo "<td>{$val}";
						if($key == "price"){
							echo "円";
						}
						echo "</td>";
					}
					echo "</tr>";
				}
			}
		?>
		</table>
		<p>合計金額　<?php echo $total; ?>円</p>
		<input type="submit" value="確定" name="submit" onClick="onClick('+')">
		<input type="submit" value="キャンセル" name="submit" onClick="onClick('-')">
	</form>
</body>
</html>