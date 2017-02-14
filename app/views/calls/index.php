<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calls</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Call ID</th>
          <th>Caller</th>
          <th>Operator</th>
          <th>Time</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($calls as $call): ?>
          <tr>
            <td><?php echo $call->read_attribute('id') ?></td>
            <td><?php echo $call->read_attribute('caller_id') ?></td>
            <td><?php echo $call->read_attribute('operator_id') ?></td>
            <td><?php echo $call->read_attribute('created_at') ?></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
