<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Call - <?php echo $id ?></title>
  </head>
  <body>
    <form action="" method="post">
      <label for="id">ID</label>
      <input type="text" name="id" value=<?php echo $id ?>>

      <input type="button" name="edit_cancel" value="Cancel">
      <input type="submit" name="edit_submit" value="Submit">
    </form>
  </body>
</html>
