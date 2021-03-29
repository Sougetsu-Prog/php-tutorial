<?php
if ($_POST["location"]) {
    $location = $_POST["location"];
    header("Location:$location");
    exit();
}
?>
<html>
  <body>
    <p>見たいサイトを選んでください: </p>
    <form action="<?php $_SERVER["SCRIPT_NAME"] ?>" method="POST">
      <!-- selectはメニューボックスを作るタグ。name属性はメニュー名を指定 -->
      <select name="location">.
        <option value="http://www.tutorialspoint.com">
          Tutorialspoint.com
        </option>
        <option value="http://www.google.com">
          Google検索ページ
        </option>
      </select>
      <input type="submit" />
    </form>
  </body>
</html>