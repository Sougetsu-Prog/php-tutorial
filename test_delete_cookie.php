<?php
  setcookie("name", "", time()-60, "/", "", 0);
  setcookie("age", "", time()-60, "/", "", 0);
?>
<html>

  <head>
    <title>クッキーの削除</title>
  </head>

  <body>
      <?php echo "クッキーを削除しました<br />"; ?>
  </body>
</html>