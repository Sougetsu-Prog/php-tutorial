<html>
  
  <head>
    <title>引数にデフォルト値を持つ関数</title>
  </head>

  <body>

        <?php
        include "function/function_printMe.php";

        // デフォルト引数はnullなので表示されない
        printMe();
        echo "\n";
        printMe("This is test");
        ?>

  </body>
</html>