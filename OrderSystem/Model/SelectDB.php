<?php
/**
*レコード取得メソッドを持つクラス
*/
class SelectDB{
  /**
  *@method doSelect
  *@param $PDO PDO
  *@param $sql 実行SQL文
  *@param $params 絞り込み条件
  */
  public function doSelect($PDO, $sql, $params){
    $result = array();
    try{
      //クエリ実行
      var_dump($sql);
      $stmt = $PDO -> prepare($sql);
      $res = $stmt -> execute(null);

      //データベースのテーブル取得
      $i = 0;
      while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        //1行ずつ配列に追加
        $result[$i] = $row;
        $i++;
      }
      $i = null;
    }catch (PDOExeption $e){
      throw new OrderSystemException("M001");
    }
    finally{
      return $result;
    }
  }
}
?>
