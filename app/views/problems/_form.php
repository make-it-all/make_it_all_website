<h1><?php echo $edit_type ?> Problem</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel">
</div>

<?php $this->form_for($problem, '/problems/new', ['class'=>'with_panels']); ?>

  <?php if ($problem->errors()->any()): ?>
    <ul>
      <?php foreach ($problem->errors()->full_messages() as $msg): ?>
        <li><?php echo $msg; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <div id="main_form_panel">
    <!-- <div class="field">
       $this->text_field($problem, 'submitted_by');
    </div> -->
    <!-- <div class="field">
       $this->text_field($problem, 'call_id');
    </div> -->
    <!-- <div class="field">
       $this->text_field($problem, 'assigned_to'); ?>
    </div> -->
    <div class="field">
      <?php $this->checkbox_field($problem, 'worked_on'); ?>
    </div>
    <div class="actions">
      <?php $this->submit_button($edit_type.' Problem'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2" >
      <input type="radio" class="tab_controller" name="tab" id="tab_3" >
      <input type="radio" class="tab_controller" name="tab" id="tab_4" >
      <div class="tab_heads_container">
        <label for="tab_1">Description</label>
        <label for="tab_2">Hardware/Software</label>
        <label for="tab_3">Specialization</label>
        <label for="tab_4">Solution</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <input type="text" name="descripion" value="Description">
          </fieldset>
        </div>
        <div class="tab_panel">
          <div class="field">
            <?php $this->text_field($problem, 'hardware_id'); ?>
          </div>
          <div class="field">
            <?php $this->text_field($problem, 'software_id'); ?>
          </div>
        </div>
        <div class="tab_panel">
          <div class="field">
            <?php $this->text_field($problem, 'specialization_id'); ?>
          </div>
        </div>
        <div class="tab_panel">
          <div class="field">
            <?php $this->text_field($problem, 'solution_id'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
