<?php
class OrderSystemException extends Exception{
  //エラーメッセージ定義
  const ErrMsg  = array(
                    "S" => array(
                      "S001" => "DB接続エラー",
                      "S002" => "通信エラー"
                    ),
                    "M" => array(
                      "M001" => "レコード取得エラー"
                    )
                  );

  //仮引数にエラーコードを受け取る
  public function __construct($cord){
    //エラーコードの頭文字からエラー内容を判別
    $initial = substr($cord, 0, 1);
    try{
      $this -> msg = self::ErrMsg[$initial][$cord];
    }catch(Exception $e){
      $this -> msg = "エラーコードが存在しない";
    }
    parent::__construct($this -> msg, 0, null);
  }
}
?>
