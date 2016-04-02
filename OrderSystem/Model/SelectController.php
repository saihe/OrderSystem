<?php
/**
*レコード取得メソッドを呼び出すクラス
*/
require_once "SelectDB.php";

class SelectController{
  private $selectDB;

  public function __construct(){
    $this -> selectDB = new SelectDB();
  }

  /**
  *@method selectTable
  *@param $PDO PDO
  *@param $column 取得カラム
  *@param $table レコード取得テーブル
  *@param $parameter レコード取得用絞り込み条件
  */
  public function selectTable($PDO, Array $column, $table, $parameter){
    //SQL文作成
    $sql = "SELECT ";
    for($i = 0; $i < count($column); $i++){
      $sql .= $column[$i];
      if($i != (count($column) -1)){
        $sql .= ", ";
      }
    }
    $sql .= " FROM " . $table;
    if($parameter != null){
      $sql .= " WHERE type_id = ". $parameter;
    }
    return $this -> selectDB -> doSelect($PDO, $sql, $parameter);
  }
}
?>
