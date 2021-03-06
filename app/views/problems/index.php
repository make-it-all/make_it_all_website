<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $problems->count() . ' ' . $this->i('titles.problems'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new'), '/problems/new'); ?>
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
  <div id="page_filter">
    <div class="filter">
      <h4><?php echo $this->i('table_headings.type'); ?></h4>
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

<div id="page_body">
  <?php $this->render('pagination', ['records' => $problems, 'offset' => $offset, 'total_records' => $total_records]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.id'); ?></th>
        <th> <?php echo $this->i('table_headings.specialization'); ?></th>
        <th> <?php echo $this->i('table_headings.submitted_by'); ?></th>
        <th> <?php echo $this->i('table_headings.assigned_to'); ?></th>
        <th> <?php echo $this->i('table_headings.solution_id'); ?></th>
        <th> <?php echo $this->i('actions.edit'); ?></th>
        <th> <?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($problems as $problem): ?>
        <tr>
          <td><?php echo $problem->id; ?></td>
          <td><?php echo $problem->specialization()->name; ?></td>
          <td><?php echo $problem->submitted_by->name; ?></td>
          <td><?php echo $problem->assigned_to->name; ?></td>
          <td><?php echo $problem->solution_id; ?></td>
          <td><?php echo $this->link_to('edit', "/problems/$problem->id/edit"); ?></td>
          <td><?php echo $this->link_to('delete', "/problems/$problem->id", 'DELETE'); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
