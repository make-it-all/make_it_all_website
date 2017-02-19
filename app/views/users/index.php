<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' Users'; ?></h1>
      <?php echo $this->link_to('New +', '/users/new'); ?>
    </div>
    <?php if (isset($facts)): ?>
      <div id="page_stats">
        <?php foreach ($facts as $fact): ?>
          <p><?php echo $fact; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
  <div id="page_filter">
    <div class="fitler">
      <h5>Type</h5>
      <a href="#">Hardware <?php $this->icon('desktop'); ?></a>
      <a href="#">Software <?php $this->icon('file-code-o'); ?></a>
    </div>
    <?php $this->render('search_form'); ?>

  </div>
</div>

<div id="page_body">
  <?php $this->render('pagination', ['records' => $users]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th>Personnel Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Last Seen At</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ?>
        <tr>
          <td>
            <?php if ($user->personnel() !== null) { echo $user->personnel()->personnel_id; } ?>
          </td>
          <td><?php echo $user->name; ?></td>
          <td><?php echo $user->email; ?></td>
          <td><?php echo $user->last_seen_at; ?></td>
          <td><?php echo implode(', ', $user->roles()); ?></td>
          <td><?php echo $this->link_to('edit', "/users/$user->id/edit"); ?></td>
          <?php if ($user->is_admin): ?>
            <td><?php echo $this->link_to('delete', "/users/$user->id", 'DELETE'); ?></td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
