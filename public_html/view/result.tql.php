<!DOCTYPE html>
<html lang="ja">
  <?php include('header.inc.php')?>
  <body>
<article class="todo-body">   
<h1 class="title">やることリスト登録</h1>
<form action="index.php" method='post' class='todo-form'>
　　　<p><?php echo $message;?></p>
    <p><?php echo $article;?></p>
    <p><?php echo $name;?></p>
    <button type='submit'>ページに戻る</button>
</form>
</article> 
  </body>
<?php include('footer.inc.php');?>
</html>