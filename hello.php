<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php
    # これはコメントです。
    // これもコメントです。
    /* ここから
    ここまでもコメントです。
    */
    echo '<p>Hello World</p>';
    echo $_SERVER['HTTP_USER_AGENT'];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        ?>
    <h3>strposが非falseを返しました</h3>
    <center><b>あなたはInternet Explorerを使用しています</b></center>
        <?php
    } else {
        ?>
    <h3>strposがfalseを返しました</h3>
    <center><b>あなたはInternet Explorerを使用していません</b></center>
        <?php
    }
    ?>
    <?php
        # 複数行の文字列出力1
    print <<<END
    コメントコメントコメント
    コメントコメント
    コメント
    END;
    # 複数行の文字列出力2
    print "このダブルクォーテーションの
    間であれば、複数行の文字列を出力する
    ことができます。<br>";
    # 大文字と小文字の区別
    $capital = 23;
    print("小文字の変数は$capital<br>");
    print("大文字の変数は$CaPiTal<br>");

    include 'func_nl2br.php';
    $num_for_if = 3;
    if ($num_for_if == 2 + 1) {
        print("Am I ok?");
        br();
    }
    # br();
    $num_for_if = 10;
    echo "Now my number is $num_for_if";
    br();
    # include前は当然別ファイルの変数名を参照できない
    echo "She is $firstname $lastname";
    br();
    # includeの後は""でも''でもok
    include 'include_and_variable.php';
    # 変数を表示するときは""で囲む ''は変数名がそのまま表示されてしまう
    echo "She is $firstname $lastname";
    br();
    echo 'She is $firstname $lastname';
    ?>
    </body>
</html>