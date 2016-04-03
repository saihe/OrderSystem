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
      <span id="product{$product -> getName()}">{$product -> getName()}</p>
    </td>
    <td>
      {$product -> getPrice()}円
    </td>
    <td>
      <input type="button" value="+" name="inc{$product -> getId()}" onClick="calc('{$product -> getId()}', '{$product -> getName()}', '+')">
    </td>
    <td>
      <input type="button" value="-" name="dec{$product -> getId()}" onClick="calc('hidden{$product -> getId()}', '{$product -> getName()}', '-')">
    </td>
    <td>
      <span id="span{$product -> getId()}">0</span>
      <input type="hidden" value="0" name="hidden{$product -> getId()}">
    </td>
  </tr>
TABLE;
}
echo "</table>";
?>
