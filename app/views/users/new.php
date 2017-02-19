<?php $this->form_for($user, '/users'); ?>

  <?php if ($user->errors()->any()): ?>
    <ul>
      <?php foreach ($user->errors()->full_messages() as $msg): ?>
        <li><?php echo $msg; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

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
    <?php $this->submit_button('Create User'); ?>
  </div>
</form>
