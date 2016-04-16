<?php
/**
*レコードを追加するメソッドを持つクラス
*/
class InsertDB{
  /**
  *@method doInsert
  *@param $PDO PDO
  *@param $sql INSERTを実行するSQL文
  */
  public function doInsert($PDO, $sql){
    $res = false;
    try{
      $stmt = $PDO -> prepare($sql);
      $res = $stmt -> execute();
    }catch(PDOExeption $e){
      throw new OrderSystemException("S003");
    }finally{
      return $res;
    }
  }
}
?>
