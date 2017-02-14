<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Problem - <?php echo $id ?></title>
  </head>
  <body>
    <form action="" method="post">
      <label for="id">ID</label>
      <input id="id" type="text" name="id" value="<?php echo $id ?>">

      <input type="button" name="edit_cancel" value="Cancel" href="/calls">
      <input type="submit" name="edit_submit" value="Submit">
    </form>
  </body>
</html>
