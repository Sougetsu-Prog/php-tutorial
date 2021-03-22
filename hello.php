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
    br();
    # integerは小数点の無い整数 正と負の整数に対応
    $int_var = 12345;
    echo $int_var;
    br();
    $another_int = -12346 + $int_var;
    echo $another_int;
    br();
    $million = 1000000;
    $large_number = 50000000000000 * $million;
    var_dump($large_number);
    br();
    var_dump(round(25/7));
    br();
    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    # 必要最低限の桁数がプリントされる
    print("$many + $many_2 = $few <br>");
    br();
    if (true) {
        print("この場所はいつもprintされます。<br>");
    } else {
        print("この場所がprintされることはありません。<br>");
    }
    if (0) {
        print("この場所はprintされますか?<br>");
    } else {
        print("if(0)の処理文はprintされなかったようです<br>");
    }
    if ("") {
        print("この場所はprintされますか?<br>");
    } else {
        # 意味のある記号は""内では\でエスケープする
        print("if(\"\")の処理文はprintされなかったようです<br>");
    }
    $false_array = array();
    if ($false_array) {
        print("この場所はprintされますか?<br>");
    } else {
        print("if(\$false_array)の処理文はprintされなかったようです<br>");
    }
    $false_array2 = [];
    if ($false_array2) {
        print("この場所はprintされますか?<br>");
    } else {
        print("if(\$false_array2)の処理文はprintされなかったようです<br>");
    }
    if (empty($false_array2)) {
        echo "emptyは変数が空かどうか検査します。<br>
        変数が空であるとみなされるのは、変数が存在しない場合や 変数の値が false に等しい場合です。<br>
        \$false_array2の配列内は空です。<br>";
    }
    $var_zero = 0;
    if (empty($var_zero)) {
        // $var_zeroが0なのでtrueと評価される
        echo '$var_zero は0か空か値が代入されていません。<br>';
    }
    if (isset($var_zero)) {
        echo '$var_zeroは0ですが変数がセットされているので<br>
        trueと評価されます。<br>';
    }
    $var_null = null;
    if (isset($var_null)) {
        echo 'この場所は表示されるでしょうか？<br>';
    } else {
        echo '$var_nullはnullなのでIsSet()関数で<br>
        テストするとfalseを返します。<br>';
    }
    $string_zero = "";
    if ($string_zero) {
        echo '';
    } else {
        echo '文字列の長さが0なのでif文ではfalseです。<br>
        isset()関数では変数がセットされているので<br>
        trueとなります。<br>';
    }
    $var_name = "name";
    $literally = '私の$var_nameは展開されません!<br>';
    print ($literally);
    $channel =<<<_XML_
    <channel>
      <title>What's For Dinner</title>
      <link>test.com</link>
      <description>Choose what to eat tonight.</description>
    </channel>
    _XML_;
    br();
    echo <<<END
    この場所も<br>
    ここも
    もちろんここも
    変数も使えます
    例えば\$var_name の値は{$var_name}です。
    ここまで
    END;
    print $channel;
    br();
    # PSR-2によれば同一ファイル内でシンボル(クラス・関数・定数)の宣言を
    # すべきでないとのことなので、test_define.phpに記述
    # define("ONE", "first thing");
    include 'test_define.php';
    echo ONE;
    br();
    echo ONE; // Is it valid?とは表示されない
    br();
    echo TWO;
    br();
    print (var_dump(ONE, TWO)); // TWOは単なるTWOという文字列
                                // として扱われている
    br();
    echo _THREE_;
    br();
    echo __LINE__;
    br();
    echo __FILE__;
    br();
    echo __CLASS__;
    br();
    echo __FUNCTION__;
    br();
    echo __DIR__;
    br();
    
    $d = date("D");
    /*
    if ($d == "Fri") {
        echo "Have a nice weekend<br>";
    } else {
        echo "Have a nice day!<br>";
    }
    */
    switch ($d) {
        case "Mon":
            echo "Today is Monday<br>";
            break;
        
        case "Tue":
            echo "Today is Tuesday<br>";
            break;
        
        case "Wed":
            echo "Today is Wednesday<br>";
            break;
        
        case "Thu":
            echo "Today is Thursday<br>";
            break;
        
        case "Fri":
            echo "Today is Friday<br>";
            break;
        
        case "Sat":
            echo "Today is Saturday<br>";
            break;
        
        case "Sun":
            echo "Today is Sunday<br>";
            break;
        
        default:
            echo "Which day is this?<br>";
    }
    ?>
    </body>
</html>