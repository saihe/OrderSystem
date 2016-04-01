<?php
require_once "../Exception/OrderSystemException.php";

//テーブルでレイアウト
echo "<table>";
echo "<tr><th>商品名</th><th>値段</th></tr>";
//クッキーからレコードデータ取得、格納
//session_start(["read_and_close" => true]);
$s = $_SESSION;
//一応ifで回避
foreach($s as $key => $val){
  echo "<tr>";
  foreach($val as $k => $v){
    if($k == "id" || $k == "cord" || $k == "created" || $k == "modified"){
      continue;
    }
    if($k == "unit_price"){
      echo "<td>" . number_format($v) . "円</td>";
      continue;
    }
    echo "<td>" . $v . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
