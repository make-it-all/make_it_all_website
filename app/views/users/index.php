<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' ' . $this->i('titles.users'); ?></h1>
      <?php echo $this->link_to($this->i('actions.new'), '/users/new'); ?>
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
      <?php echo $this->link_to($this->i('titles.hardware') . $this->icon('desktop')); ?>
      <?php echo $this->link_to($this->i('titles.software') . $this->icon('file-code-o')); ?>
    </div>
    <?php $this->render('search_form'); ?>

  </div>
</div>

<div id="page_body">
  <?php $this->render('pagination', ['records' => $users]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.id'); ?></th>
        <th> <?php echo $this->i('table_headings.name'); ?></th>
        <th> <?php echo $this->i('table_headings.email'); ?></th>
        <th> <?php echo $this->i('table_headings.last_seen_at'); ?></th>
        <th> <?php echo $this->i('table_headings.role'); ?></th>
        <th> <?php echo $this->i('actions.edit'); ?></th>
        <th> <?php echo $this->i('actions.delete'); ?></th>
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
