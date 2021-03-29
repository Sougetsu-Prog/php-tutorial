<html>

  <head>
    <title>ファイルの読み取り</title>
  </head>

  <body>
    <?php
    $filename = "tmp.txt";
    // fopenはファイルを開くことに成功した場合ファイルポインタを返し、
    // 失敗した場合falseを返す
    $file = fopen($filename, "r");

    if ($file === false) {
        echo "ファイルのopenに失敗しました。";
        exit();
    }

    $filesize = filesize($filename);
    // fread ( resource $stream , int $length ) : string|false
    // freadは読み込んだ文字列を返す。失敗した場合はfalseを返す。
    // fread()はstreamが指すファイルポインタから最高lengthバイト読み込む
    $filetext = fread($file, $filesize);
    fclose($file);

    echo "File size: $filesize bytes";
    echo "<pre>$filetext</pre>";
    ?>
  </body>
</html>