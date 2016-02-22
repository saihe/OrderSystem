<?php
class CreateFormTag{
	private $tags;

	public function __construct(){
		$this -> tags = array();
	}

	//データベースから受け取ったレコードからフォームを作成
	public function createFormTag($result){
		foreach($result as $key => $value){
			$this -> tags[$key] = "<tr><th>" . $value['name'] . "</th><th>" . $value['price'] . "円</th>";
			$this -> tags[$key] .= "<td><input type='button'  value='+' onClick='onClick(\"" . $value['id'] . "\", \"+\")'></td>";
			$this -> tags[$key] .= "<td><input type='button'  value='-' onClick='onClick(\"" . $value['id'] . "\", \"-\")'></td>";
			$this -> tags[$key] .= "<input type='hidden' name='" . $value['id'] . "Name' value='" . $value['name'] . "'>";
			$this -> tags[$key] .= "<input type='hidden' name='" . $value['id'] . "Count' value='0' id='" . $value['id'] . "Count'>";
			$this -> tags[$key] .= "<input type='hidden' name='" . $value['id'] . "Price' value='" . $value['price'] . "' id='" . $value['id'] . "Price'>";
			$this -> tags[$key] .= "<td><span id='" . $value['id'] . "Counter'>0</span></td></tr><br>";
		}
		return $this -> tags;
	}
}
?>