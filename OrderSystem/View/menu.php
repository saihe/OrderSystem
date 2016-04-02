<!DOTTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../CSS/common.css">
</head>
<title>メニュー</title>
<body>
  <div id="content">
    <form method="POST" action="../Controller/MainController.php">
      <?php
        include "../Util/SessionRun.php";
        include "../Util/PrintErrMsg.php";
        include "../Util/PrintNavi.php";
        include "../Util/PrintProducts.php";
        //デバッグ用にクッキーを生かすためにコメントアウト
        //include "../Util/SessionStop.php";
      ?>
      <input type="submit" name="submit" value="注文する">
    </form>
  </div>
</body>
</html>
