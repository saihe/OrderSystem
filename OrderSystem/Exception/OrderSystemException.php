<?php
class OrderSystemException extends Exception{
  //エラーメッセージ定義
  const ErrMsg  = array(
  				  "S" => array(
  					 		"S001" => "DB接続エラー",
                            "S002" => "通信エラー"
                  		),
                  "M" => array(
                  			"M001" => "なんか"
                  		)
                  );

  //仮引数にエラーコードを受け取る
  public function __construct($cord){
    //エラーコードの頭文字からエラー内容を判別
    $initial = substr($cord, 0, 1);
    if($initial == "S"){
      $this -> msg = self::ErrMsg["S"][$cord];
    }
    else if($initial == "M"){
      $this -> msg = self::ErrMsg["M"][$cord];
    }
    else{
      $this -> msg = array("000", "エラーコード無効");
    }
    parent::__construct($this -> msg, 0, null);
  }
}
?>
