<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Personnel</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Personnel ID</th>
          <th>Name</th>
          <th>Job Title</th>
          <th>Email</th>
          <th>Telephone No.</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($personnels as $personnel): ?>
          <tr>
            <td><?php echo $personnel->read_attribute('name') ?></td>
            <td><?php echo $personnel->read_attribute('personnel_id') ?></td>
            <td><?php echo $personnel->read_attribute('job_title') ?></td>
            <td><?php echo $personnel->read_attribute('email') ?></td>
            <td><?php echo $personnel->read_attribute('telephone_number') ?></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
