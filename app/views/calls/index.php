<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $calls->count() . ' ' . $this->i('titles.calls'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new'), '/calls/new'); ?>
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
</div>

<div id="page_body">
  <?php $this->render('pagination', ['records' => $calls]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.id'); ?></th>
        <th> <?php echo $this->i('table_headings.operator_id'); ?></th>
        <th> <?php echo $this->i('table_headings.caller_id'); ?></th>
        <th> <?php echo $this->i('table_headings.updated_by'); ?></th>
        <th> <?php echo $this->i('table_headings.updated_at'); ?></th>
        <th> <?php echo $this->i('actions.edit'); ?></th>
        <th> <?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($calls as $call): ?>
        <tr>
          <td>
            <?php echo $call->id; ?>
          </td>
          <td><?php echo $call->operator_id; ?></td>
          <td><?php echo $call->caller_id; ?></td>
          <td><?php echo $call->updated_by; ?></td>
          <td><?php echo $call->updated_at; ?></td>
          <td><?php echo $this->link_to('edit', "/calls/$call->id/edit"); ?></td>
          <td><?php echo $this->link_to('delete', "/calls/$call->id", 'DELETE'); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
