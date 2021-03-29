<?php
if ($_POST["name"] || $_POST["age"]) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("無効な名前です。");
    }
    
    echo "ようこそ ". $_POST['name']. " さん。<br />";
    echo "あなたは ". $_POST['age']. " 歳です。<br />";

    exit();
}
?>
<html>
  <body>
    <!-- $_SERVER['SCRIPT_NAME']現在のスクリプトのパス。 スクリプト自身のページを指定する。 -->
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
      Name: <input type="text" name="name" />
      Age: <input type="text" name="age" />
      <input type="submit" />
    </form>
  </body>
</html>