<?php
//クラスインポート
require_once "../Model/AccessDB.php";

try{
  $con = new AccessDB();
  if($con -> getRes() == TRUE){
    header("Location: ../index.php/DBConnctionOK");
  }
}catch(OrderSystemException $e){
  echo $e -> getMessage();
}
?>
