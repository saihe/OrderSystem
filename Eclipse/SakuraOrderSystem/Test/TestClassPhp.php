<?php
	require_once '../Data/AccessGoods.php';
	$pdo = new AccessGoods();
	print_r($pdo -> doSelect("SELECT * FROM foods"));
?>
