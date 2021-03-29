<?php
// 以下の文でエラーを表示することができる
ini_set('display_errors', "On");
$filename = "newfile.txt";
$file = fopen($filename, "w");

if ($file === false) {
    echo "ファイルのopenに失敗しました。";
    exit();
}
// 所有者をapacheにしないとエラーになる
// newfile.txtが存在しない場合でも新たに作られる
fwrite($file, "これはfwriteのテストです。\n");
fclose($file);
?>
<html>

  <head>
    <title>ファイルの書き込み</title>
  </head>
  
  <body>
        <?php
        $filename = "newfile.txt";
        $file = fopen($filename, "r");

        if ($file === false) {
            echo "ファイルのopenに失敗しました。";
            exit();
        }
        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);

        fclose($file);

        echo "File size: $filesize bytes<br />";
        echo "$filetext<br />";
        echo "File name: $filename <br />";
        ?>
  </body>
</html>