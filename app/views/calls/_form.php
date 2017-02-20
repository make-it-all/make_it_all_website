<h1><?php echo $edit_type ?> Call</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel">
</div>

<?php $this->form_for($call, '/calls/new', ['class'=>'with_panels']); ?>

  <?php if ($call->errors()->any()): ?>
    <ul>
      <?php foreach ($call->errors()->full_messages() as $msg): ?>
        <li><?php echo $msg; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <div id="main_form_panel">
    <div class="field">
      <?php $this->text_field($call, 'operator_id'); ?>
    </div>
    <div class="field">
      <?php $this->text_field($call, 'caller_id'); ?>
    </div>
    <div class="actions">
      <?php $this->submit_button($edit_type.'Call'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <div class="tab_heads_container">
        <label for="tab_1">Description</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <input type="text" name="Description" value="Description...">
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</form>
