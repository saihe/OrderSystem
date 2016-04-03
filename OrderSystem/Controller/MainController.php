<?php
//クラスインポート
require_once "../Model/AccessDB.php";
require_once "../Model/SelectController.php";
require_once "../Model/Product.php";

//行先パス定義
$location;
$view = "../View";
$path = array(
  "top" => $view . "/top.php",
  "menu" => $view . "/menu.php",
  "confirm" => $view . "/confirm.php"
);

try{
  session_start();
  //GETメソッドを使っていたら
  if(!empty($_GET["ancer"])){
    $ancer = $_GET["ancer"];
    //レコード格納用
    $result = array();
    $accessDB = AccessDB::getInstanse();
    $selectCon = new SelectController();

    /**
    *商品一覧取得、格納
    */
    //行先指定、商品タイプからレコード絞り込み取得
    if($ancer == "all" || $ancer == "none"){
      $result = $selectCon -> selectTable($accessDB -> getPDO(), array("cord", "name", "unit_price"), "products", null);
      $location = $path["menu"]. "?ancer=". $ancer;
    }
    if($ancer == "drink"){
      $result = $selectCon -> selectTable($accessDB -> getPDO(), array("cord", "name", "unit_price"), "products", 1);
      $location = $path["menu"]. "?ancer=". $ancer;
    }
    if($ancer == "food"){
      $result = $selectCon -> selectTable($accessDB -> getPDO(), array("cord", "name", "unit_price"), "products", 2);
      $location = $path["menu"]. "?ancer=". $ancer;
    }
    //商品一覧をクッキーに格納
    for($i = 0; $i < count($result); $i++){
      $_SESSION["record" . $i] = $result[$i];
    }

    /**
    *注文履歴一覧
    */
    if($_GET["ancer"] == "confirm"){
      $location = $path["confirm"];
    }
  }
  //注文が送信されたら
  else if(!empty($_POST["submit"])){
    $location = $path["menu"] + "?ancer=all";
    $tmp = array();
    //注文した商品のみ取得
    foreach($_POST as $key => $value){
      if(strstr($key, "hidden") && $value != "0"){
        $tmp[substr($key, 6, 10)] = $value;
      }
    }
  }
  //リクエストパラメータがなかったら
  else{
    throw new OrderSystemException("M001");
  }
}catch(OrderSystemException $e){
  $location = $path["top"];
  $_SESSION["ErrMsg"] = $e -> getMessage();
}finally{
  session_write_close();
  if(empty($location)){
    $location = $path["top"];
  }
  header("Location: " . $location);
}
?>
