<?php
// 2つのクッキーを作る
// 1つ目は名前をname,値をTaro Tanaka, 有効期限を1時間,全ての
// ディレクトリでCookieを有効, セキュリティを1(HTTPSを使用した送信)
// にする
setcookie("name", "Taro Tanaka", time()+3600, "/", "", 1);
setcookie("age", "30", time()+3600, "/", "", 1);
?>
<html></html>