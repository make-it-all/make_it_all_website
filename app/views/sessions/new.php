<?php $this->image_tag('logo'); ?>
<h1>Sign In</h1>
<form action="/session/process.php" method="POST" id="login_form">
  <?php if (isset($_SESSION['loggin_errors'])): ?>
   <div class="form_errors">
     <p><?php echo $_SESSION['loggin_errors']; ?></p>
   </div>
 <?php endif; ?>
 <div class="field">
   <label for="user_email">Email</label>
   <?php if (isset($_SESSION['login_email'])): ?>
     <input type="email" name="email" id="user_email" value="<?php echo $_SESSION['login_email']; ?>">
   <?php else: ?>
     <input type="email" name="email" id="user_email" />
   <?php endif; ?>

  </div>
  <div class="field">
    <label for="user_password">Password</label>
    <input type="password" name="password" id="user_password">
  </div>
  <div class="actions">
    <input type="submit" name="commit" value="Login">
  </div>
</form>
<div id="language_bar">
 <a href="https://make-it-all-demo.herokuapp.com">English</a>
 <a href="https://make-it-all-demo-german.herokuapp.com">Deutsch</a>
 <a href="https://make-it-all-demo-chinese.herokuapp.com">中文(简体)</a>
 <a href="https://make-it-all-demo-arabic.herokuapp.com">العربية</a>
</div>
