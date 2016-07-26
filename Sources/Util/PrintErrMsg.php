<?php
if(isset($_SESSION["ErrMsg"])){
  echo <<<ErrMsg
  <div>
    <p id="ErrMsg">エラー: {$_SESSION["ErrMsg"]}</p>
  </div>
ErrMsg;
}
?>
