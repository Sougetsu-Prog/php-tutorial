<?php
define("ONE", "first thing");
# 定数を再定義することはできないため、
# echo ONE;とすると、first thingが
# 表示される
define("ONE", "Is it valid?");
