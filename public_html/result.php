<?php 
$message='入力が完了しました';
$article=htmlspecialchars($_REQUEST['article']);
$name=htmlspecialchars($_REQUEST['name']);
$line=$article.",".$name.PHP_EOL;
file_put_contents(__DIR__.'/articles.txt',$line,FILE_APPEND | LOCK_EX);
require_once 'view/result.tql.php';
?>