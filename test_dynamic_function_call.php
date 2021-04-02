<html>

  <head>
    <title>動的な関数呼び出し</title>
  </head>

  <body>

        <?php
        include "function/function_sayHello.php";

        // 関数名を変数に割り当ててから、元の関数と同じ様に扱う
        $function_holder = "sayHello";
        // sayHello()が呼ばれる
        $function_holder();
        ?>

  </body>
</html>