<?php
define("ONE", "first thing");
# 定数を再定義することはできないため、
# echo ONE;とすると、first thingが
# 表示される
define("ONE", "Is it valid?");
// PSR2によるとdefine()に使える定数は大文字を使わないといけない
# define("two", );
define("TWO");
// 以下のような書き方は有効だが避けるべき
define("_THREE_", "This isn't recommended");
define;
