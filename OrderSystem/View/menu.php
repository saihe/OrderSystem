<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../CSS/common.css">
  <script src="../../JS/Counter.js"></script>
</head>
<title>メニュー</title>
<body onload="onLoad()">
  <div id="content">
    <form name="orderForm" method="POST" action="../Controller/MainController.php" onSubmit="return order()">
      <?php
        include "../Util/SessionRun.php";
        include "../Util/PrintErrMsg.php";
        include "../Util/PrintNavi.php";
        include "../Util/PrintProducts.php";
        //デバッグ用にクッキーを生かすためにコメントアウト
        include "../Util/SessionStop.php";
      ?>
      <input type="submit" name="submit" value="注文する">
    </form>
  </div>
</body>
</html>
