<?php
//クラスインポート
require_once "../Model/AccessDB.php";
require_once "../Model/SelectController.php";

//パス指定
$location;
$view = "../View";
$path = array(
  "top" => $view . "/top.php",
  "menu" => $view . "/menu.php",
  "confirm" => $view . "/confirm.php"
);

if(isset($_GET["ancer"])){
  $ancer = $_GET["ancer"];
  //レコード格納用
  $result = array();
  try{
    $accessDB = AccessDB::getInstanse();
    $selectCon = new SelectController();

    /**
    *商品一覧取得、格納
    */
    $result = $selectCon -> selectTable($accessDB -> getPDO(), array("name", "unit_price"), "products");
    session_start();
    for($i = 0; $i < count($result); $i++){
      $_SESSION["record" . $i] = $result[$i];
    }
    session_write_close();
    if($ancer == "all" || $ancer == "drink" || $ancer == "food" || $ancer == "none"){
      $location = $path["menu"];
    }
    else if($_GET["ancer"] == "confirm"){
      $location = $path["confirm"];
    }
  }catch(OrderSystemException $e){
    $location = $path["top"];
    session_start();
    $_SESSION["ErrMsg"] = $e -> getMessage();
    session_write_close();
  }finally{
    header("Location: " . $location);
  }
}
?>
