<!DOTTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../CSS/common.css">
</head>
<title>メニュー</title>
<body>
  <div id="content">
  <?php
    include "../Util/SessionRun.php";
    include "../Util/PrintErrMsg.php";
    include "../Util/navi.php";
    include "../Util/PrintProducts.php";
    include "../Util/SessionStop.php";
  ?>
  </div>
</body>
</html>
