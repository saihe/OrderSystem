<?php
/**
*レコード取得メソッドを持つクラス
*/
require_once "Product.php";

class SelectDB{
  /**
  *@method doSelect
  *@param $PDO PDO
  *@param $sql 実行SQL文
  *@param $params 絞り込み条件
  */
  public function doSelect($PDO, $sql, $params){
    $records = array();
    try{
      //クエリ実行
      $stmt = $PDO -> prepare($sql);
      $res = $stmt -> execute();

      //データベースのテーブル取得
      $i = 0;
      while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        //Produtcオブジェクトをクッキーに保存できるようにシリアル化して、配列に保存
        $product = serialize(new Product($row["cord"], $row["name"], $row["unit_price"]));
        $records[$i] = $product;
        $i++;
      }
      $i = null;
    }catch (PDOExeption $e){
      throw new OrderSystemException("M002");
    }
    finally{
      return $records;
    }
  }
}
?>
