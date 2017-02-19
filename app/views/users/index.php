<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' Users'; ?></h1>
      <?php $this->link_to('New +', '#'); ?>
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
    <div id="type_filter">
      <h5>Type</h5>
      <a href="#">Hardware <?php $this->icon('desktop'); ?></a>
      <a href="#">Software <?php $this->icon('file-code-o'); ?></a>
    </div>
    <?php $this->render('search_form'); ?>

  </div>
</div>

<div id="page_body">
  <div id="pagination">
    <div id="pagination_links">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
    <div id="pagination_results">
      <p>Showing 1-6 of 136</p>
    </div>
  </div>
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
          <td><?php echo $this->link_to('edit', '/edit'); ?></td>
          <?php if ($user->is_admin): ?>
            <td><?php echo $this->link_to('delete', '/edit'); ?></td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
