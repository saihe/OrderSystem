<?php
//クラスインポート
require_once "../Model/AccessDB.php";
$result;
$res;

try{
  $accessDB = new AccessDB();
  if($accessDB -> getRes() == TRUE){
    try{
      session_start();
			//クエリ実行
			$stmt = $accessDB -> getPDO() -> prepare("select * from products");
			$res = $stmt -> execute(null);

			//データベースのテーブル取得
			$i = 0;
			while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				//1行ずつ配列に追加
				$result[$i] = $row;
				$i++;
			}
		}catch (PDOExeption $e){
			$res = $e -> getMassage();
		}
    finally{
      foreach($result as $key => $val){
        foreach($val as $k => $v){
          $_SESSION[$k] = $v;
        }
      }
      session_write_close();
      header("Location: ../View/menu.php/");
    }
  }
}catch(OrderSystemException $e){
  echo $e -> getMessage();
}
?>
