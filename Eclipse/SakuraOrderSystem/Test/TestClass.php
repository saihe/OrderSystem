<?php
	class TestClass{

		//カプセル化されてる
		private $name = "hoge";

		//setter/getter
		public function setName($name){
			$this -> name = (string)filter_var($name);
		}
		public function getName(){
			return $this -> name;
		}
	}
?>