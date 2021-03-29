<?php
if ($_REQUEST["name"] || $_REQUEST["age"]) {
    echo "ようこそ". $_REQUEST["name"]. "さん<br />";
    echo "あなたは". $_REQUEST["age"]. "歳です<br />";
    # exit();を付けないと終了しない
    exit();
}
?>
<html>
  <body>
    <form action="<?php $_SERVER["SCRIPT_NAME"] ?>" method="POST">
      名前: <input type="text" name="name" />
      年齢: <input type="text" name="age" />
      <input type="submit" />
    </form>
  </body>
</html>