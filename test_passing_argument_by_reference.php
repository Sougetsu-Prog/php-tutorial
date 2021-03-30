<html>

  <head>
    <title>参照による引数受け渡し</title>
  </head>

  <body>
    <?php
    include "function_addNum.php";

    $orignum = 10;
    addFive($orignum);

    echo "値は $orignum<br />";

    addSix($orignum);

    echo "値は $orignum<br />";

    addFive($orignum);
    // $orignumは16になっている
    echo "値は $orignum<br />";
    ?>

  </body>
</html>