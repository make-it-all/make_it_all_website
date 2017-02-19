<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' ' . $this->i('titles.users'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new'), '/users/new'); ?>
      </div>
    </div>
    <?php if (isset($facts)): ?>
      <div id="page_stats">
        <?php foreach ($facts as $fact): ?>
          <p><?php echo $fact; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
<<<<<<< HEAD
</div>
=======
  <div id="page_filter">
    <div class="filter">
      <h3><?php echo $this->i('table_headings.type'); ?></h3>
      <div class="filter_button">
        <?php echo $this->link_to($this->i('titles.hardware') . $this->icon('desktop'),'#'); ?>
      </div>
      <div class="filter_button">
        <?php echo $this->link_to($this->i('titles.software') . $this->icon('file-code-o'),'#'); ?>
      </div>
    </div>
    <div class="search_bar">
      <?php $this->render('search_form'); ?>
    </div>
  </div>

  </div>
>>>>>>> d329164fe31d39f9b8276f519479c27c1d02e3f8

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
            <td><?php echo $this->link_to('delete', "/users/$user->id", 'DELETE'); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
