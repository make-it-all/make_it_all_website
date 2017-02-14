<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NEW USER</title>
  </head>
  <body>
    <form action="/users" method="post">
      <h1>New User</h1>
      <div class="field">
        <label for="user_name">Name</label>
        <input type="text" id="user_name" name="user[name]">
      </div>
      <div class="field">
        <label for="user_email">Email</label>
        <input type="text" id="user_email" name="user[email]">
      </div>
      <div class="actions">
        <input type="submit" name="commit" value="Create User">
      </div>
    </form>
  </body>
</html>
