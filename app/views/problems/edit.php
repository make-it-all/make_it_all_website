<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Problem - <?php $call ?></title>
  </head>
  <body>
    <form action="" method="post">
      <label for="id"></label>
      <input type="text" name="id" value=<?php $call ?>>

      <input type="button" name="edit_cancel" value="Cancel">
      <input type="submit" name="edit_submit" value="Submit">
    </form>
  </body>
</html>
