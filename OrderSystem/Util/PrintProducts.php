<?php
require_once "../Exception/OrderSystemException.php";
require_once "../Model/Product.php";

//テーブルでレイアウト
echo "<table>";
echo "<tr><th>商品名</th><th>値段</th><th>加える</th><th>減らす</th><th>注文個数</th></tr>";
//クッキーからレコードデータ取得、格納
$rec = $_SESSION;
foreach($rec as $key => $val){
  //シリアライズされたProductオブジェクトのシリアル化解除
  $product = unserialize($val);
  echo <<<TABLE
  <tr>
    <td>
      {$product -> getName()}
    </td>
    <td>
      {$product -> getPrice()}
    </td>
    <td>
      <input type="button" value="+" name="inc{$product -> getId()}">
    </td>
    <td>
      <input type="button" value="-" name="dec{$product -> getId()}">
    </td>
    <td>
      0
      <input type="hidden" value="0" name="{$product -> getId()}">
    </td>
  </tr>
TABLE;
}
echo "</table>";
?>
