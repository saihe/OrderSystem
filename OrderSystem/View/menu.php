<?php
  session_start();
  $s = $_SESSION;
  session_destroy();
?>
<!DOTTYPE html>
<html>
<head>
</head>
<title>メニュー</title>
<body>
<?php
  var_dump($s);
?>
</body>
</html>
