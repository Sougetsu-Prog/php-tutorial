<?php
# 改行文字の前にHTMLの改行タグを挿入する
# nl2br ( string $string , bool $use_xhtml = true ) : string
function br()
{
    echo nl2br("\n");
}
# PSR2によるとファイルの最後に閉じタグを使ってはいけないらしい
/* ?> */
