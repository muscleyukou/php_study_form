<?php
$message='ここに本日やることを入力してください';
$lines=file(__DIR__.'/articles.txt',FILE_IGNORE_NEW_LINES);
require_once 'view/index.tql.php';
?>