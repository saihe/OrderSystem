<?php
/**
*レコード追加メソッドを呼び出すクラス
*/
require_once "InsertDB.php";

class InsertController{
  private $insertDB;

  public function __construct(){
    $this -> insertDB = new InsertDB();
  }

  /**
  */
  public function insertOrder($PDO, Array $values, $table){
    //INSERT INTO テーブル名 VALUES(value1, value2,.....);
    //historiesテーブル: id, customer_id, product_id, amount, created, modified
    $sql = "INSERT INTO ". $table. "(customer_id, product_cord, amount) VALUES(";
    for($i = 0; $i < count($values); $i++){
      $sql .= $values[$i];
      if($i != (count($values) -1)){
        $sql .= ", ";
      }
    }
    $sql .= ")";
      return $this -> insertDB -> doInsert($PDO, $sql);
  }
}
?>
