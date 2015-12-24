<?php
	//TestClassの読み込み
	require_once 'TestClass.php';

	//TestClassのインスタンス
	$test = new TestClass();

	//TestClassのgetName()メソッド
	print $test -> getName();
?>