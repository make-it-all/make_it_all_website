<?php $this->form_for($user, '/users'); ?>
  <h1>New User</h1>
  <?php $this->text_field($user, 'name'); ?>
  <?php $this->text_field($user, 'email'); ?>
  <?php $this->password_field($user, 'password'); ?>
  <fieldset>
    <legend>Role</legend>
    <?php $this->checkbox_field($user, 'is_operator'); ?>
    <?php $this->checkbox_field($user, 'is_specialist'); ?>
    <?php $this->checkbox_field($user, 'is_admin'); ?>
  </fieldset>
  <div class="actions">
    <?php $this->submit_field('Create User'); ?>
  </div>
</form>
