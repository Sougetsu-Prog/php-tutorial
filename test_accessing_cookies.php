<?php
   setcookie("name", "John Watkin", time()+3600, "/", "", 0);
   setcookie("age", "36", time()+3600, "/", "", 0);
?>
<html>

  <head>
    <title>クッキーへのアクセス</title>
  </head>

  <body>
      
        <?php
        echo $_COOKIE["name"]. "<br />";

        // $HTTP_COOKIE_VARSは現在非推奨

        echo $_COOKIE["age"]. "<br />";

        // Cookie"name"と"age"が登録されていたら文字列表示
        if (isset($_COOKIE["name"]) && isset($_COOKIE["age"])) {
            echo "ようこそ ". $_COOKIE["name"]. "<br />";
        } else {
            echo "登録されていません。";
        }
        ?>

  </body>
</html>