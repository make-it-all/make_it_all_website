<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Problems</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Problem ID</th>
          <th>Submitted By</th>
          <th>Specialization</th>
          <th>Assigned To</th>
          <th>Solution</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($problems as $problem): ?>
          <tr>
            <td><?php echo $problem->read_attribute('id') ?></td>
            <td><?php echo $problem->read_attribute('submitted_by') ?></td>
            <td><?php echo $problem->read_attribute('specialization_id') ?></td>
            <td><?php echo $problem->read_attribute('assigned_to') ?></td>
            <td><?php echo $problem->read_attribute('solution_id') ?></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
