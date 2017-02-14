<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Personnel Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?php echo $user->read_attribute('personnel_id') ?></td>
            <td><?php echo $user->read_attribute('name') ?></td>
            <td><?php echo $user->read_attribute('email') ?></td>
            <td><a href="/users/<?php echo $user->read_attribute('id')?>/edit">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="/users/new">New</a>
  </body>
</html>
