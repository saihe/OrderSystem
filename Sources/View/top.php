<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../CSS/common.css">
  <style>
    body{
      height: 500px;
      margin-top: 100px;
      padding: auto;
    }
    p{
      background-color: #EEEEFF;
      font-size: 40px;
    }
  </style>
</head>
<title>トップページ</title>
<body>
  <?php
    include "../Util/SessionRun.php";
    include "../Util/PrintErrMsg.php";
    include "../Util/SessionStop.php";
  ?>
  <p><a href="../Controller/MainController.php?ancer=none">ここをクリックして注文を始めてください。</a></p>
</body>
</html>
