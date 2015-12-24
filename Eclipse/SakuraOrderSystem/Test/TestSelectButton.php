<?php
$name = array("F001" => 0, "F002" => 0, "D001" => 0, "D002" => 0);
$F001 = $_POST["F001"];
/*
foreach($name as $key => $val){
	$name = array($key => $_POST[$key]);
}*/
print_r($_POST);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<script type="text/javascript">
	//カウントを入れる
	var inputName = {"F001": 0, "F002": 0, "D001": 0, "D002": 0}
	var count;
	var cnt;

	function onLoad(){
		count = document.getElementById("countF001");
		cnt = document.getElementById("cntF001");
	}

	//F001ボタンのメソッド
	function F001Func(){
		inputName["F001"]++;
		count.value = inputName["F001"];
		cnt.textContent = inputName["F001"];
	}
</script>
</head>
<body onLoad="onLoad()">
	<form method="post">
	<input type="button" name="buttonF001" value="F001ボタン" onClick="F001Func()">
	<input id="countF001" type="hidden" name="F001" value="0">
	<span id="cntF001">0</span>
	<br>
		<?php
			/*foreach ($name as $key => $val){
				print '<input type="button" name="button' . $key . '" value="'. $key . 'ボタン" onClick="'. $key . '()">';
				print "<br>";
				print '<input id="count' . $key . '" type="hidden" name=" '. $key . '" value="0">';
				print '<span id="cnt'. $key . '"></span>';
				print "<br>";
			}*/
		?>
		<input type="submit" value="送信" name="submit">
	</form>
</body>
</html>