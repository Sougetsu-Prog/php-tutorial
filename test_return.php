<html>

  <head>
    <title>関数の戻り値</title>
  </head>

    <?php
    include "function/function_addFunction_with_return.php";
    $return_value = addFunction(10, 20);

    echo "関数からの戻り値: $return_value";
    ?>
</html>