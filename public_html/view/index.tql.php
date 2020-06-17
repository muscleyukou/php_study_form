<!DOCTYPE html>
<html lang="ja">
  <?php include('header.inc.php')?>
  <body>
<article class="todo-body">   
<h1 class="title">やることリスト登録</h1>
<form action="result.php" method='post' class='todo-form'>
    <p><?php echo $message;?></p>
    <label for="article">投稿</label>
    <input type="text" name='article'>
    <p></p>
    <label for="name" class='author'>投稿者名</label>
    <input type="text" name='name'><br>
    <button type='submit'>送信する</button>
</form>

<div class="todo-list">
  <h1>やることリスト</h1>
    <?php foreach($lines as $line){?>
      <p>
       <?php echo $line;?><br>
      </p>
   <?php }?>
</div>
</article> 
  </body>
<?php include('footer.inc.php');?>
</html>