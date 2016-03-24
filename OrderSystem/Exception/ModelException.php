<?php
class ModelException extends Exception{
  //エラーメッセージ定義
  const SeriousErrMsg  = array(
                                "S001" => "DB接続エラー",
                                "S002" => "通信エラー"
                                );
  const MildErrMsg = array(
                              "M001" => "なんか"
                              );

  //仮引数にエラーコードを受け取る
  public function __construct($cord){
    //エラーコードの頭文字からエラー内容を判別
    $initial = substr($cord, 0, 1);
    if($initial == "S"){
      $this -> msg = self::SeriousErrMsg[$cord];
    }
    else if($initial == "M"){
      $this -> msg = self::MildErrMsg[$cord];
    }
    else{
      $this -> msg = array("000", "エラーコード無効");
    }
    parent::__construct($this -> msg, 0, null);
  }
}
?>
