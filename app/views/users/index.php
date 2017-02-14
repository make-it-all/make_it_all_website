Index
<?php $users->load() ?>
<?php foreach ($users->records() as $user): ?>

  <?php var_dump($user) ?>
<?php endforeach; ?>
