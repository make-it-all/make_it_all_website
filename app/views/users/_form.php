<?php $this->form_for($user, '/users', ['class'=>'with_panels']); ?>

  <?php if ($user->errors()->any()): ?>
    <ul>
      <?php foreach ($user->errors()->full_messages() as $msg): ?>
        <li><?php echo $msg; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <div id="main_form_panel">
    <div class="field">
      <?php $this->text_field($user, 'name'); ?>
    </div>
    <div class="field">
      <?php $this->text_field($user, 'email'); ?>
    </div>
    <div class="field">
      <?php $this->password_field($user, 'password'); ?>
    </div>
    <div class="actions">
      <?php $this->submit_button('Create User'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2">
      <input type="radio" class="tab_controller" name="tab" id="tab_3">
      <input type="radio" class="tab_controller" name="tab" id="tab_4">
      <input type="radio" class="tab_controller" name="tab" id="tab_5">
      <div class="tab_heads_container">
        <label for="tab_1">Specializations</label>
        <label for="tab_2">Completed Jobs</label>
        <label for="tab_3">Specialisations</label>
        <label for="tab_4">History</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <legend>Role</legend>
            <?php $this->checkbox_field($user, 'is_operator'); ?>
            <?php $this->checkbox_field($user, 'is_specialist'); ?>
            <?php $this->checkbox_field($user, 'is_admin'); ?>
          </fieldset>
        </div>
        <div class="tab_panel">
          TAB 2
        </div>
        <div class="tab_panel">
          <select multiple="multiple">
            <option value="microsoft office">Microsoft Office</option>
            <option value="microsoft office">Microsoft Word</option>
            <option value="microsoft office">Microsoft Word Printing</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Styling</option>
            <option value="microsoft office">Microsoft Excel</option>
            <option value="microsoft office">Microsoft Word Formatting</option>
            <option value="microsoft office">Microsoft Word Formulas</option>
          </select>
        </div>
        <div class="tab_panel">
          history of user
        </div>
      </div>
    </div>
  </div>
</form>
