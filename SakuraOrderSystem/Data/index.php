<?php	//データベース接続クラス	require_once 'AccessGoods.php';	//フォーム作成クラス	require_once 'CreateFormTag.php';	//フォームタグ作成クラスインスタンス	$cft = new CreateFormTag();	//データベース接続クラスインスタンス	$pdo = new AccessGoods();	//データベースのテーブル取得	$result = $pdo -> doSelect("SELECT * FROM foods");?><!DOCTYPE html><html><head><meta charset="UTF-8"><title>注文システム</title><script src="OrderSystem.js"></script></head><body onLoad="onLoad()">	<p>注文メニュー</p>	<form method="post" action="Confirm.php">		<table>			<?php				//データベースから受け取ったレコードからフォームを作成				foreach ($cft -> createFormTag($result) as $val){					echo $val;				}			?>		</table>		<p>合計金額　<span id="total">0</span>円</p>		<input type="hidden" name="total" id ="postTotal">		<input type="submit" value="注文" name="submit">	</form></body></html>