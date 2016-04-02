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

//GETメソッドを使っていたら
if(!empty($_GET["ancer"])){
  $ancer = $_GET["ancer"];
  //レコード格納用
  $result = array();
  try{
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
    session_start();
    //商品一覧をクッキーに格納
    for($i = 0; $i < count($result); $i++){
      $_SESSION["record" . $i] = $result[$i];
    }
    if($_GET["ancer"] == "confirm"){
      $location = $path["confirm"];
    }

    /**
    *注文履歴一覧
    */
  }catch(OrderSystemException $e){
    $location = $path["top"];
    $_SESSION["ErrMsg"] = $e -> getMessage();
  }finally{
    session_write_close();
    header("Location: " . $location);
  }
}
//POSTメソッドを使っていたら
else if(!empty($_POST["submit"])){
  var_dump($_POST);
}
//リクエストパラメータがなかったら
else{
  header("Location: ../View/top.php");
}

?>
