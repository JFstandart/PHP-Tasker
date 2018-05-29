<?php require('common/head.php'); ?>
<div class="background-title" id="background">
  <h1 class="register-title">Sign up</h1>
  <div class="happyForm">
    <form action="/register.php" method="post">
      <input class="input-element" type="text" id="Username" name="Username" placeholder="Username" required>
      <br>
      <input class="input-element" type="password" id="Password" name="Password" placeholder="Password" required>
      <br>
      <input class="input-element" type="text" id="Name" name="Name" placeholder="Name" required>
      <br>
      <button class="button-element" type="submit" name="button">Sign Up</button>
    </form>
  </div>
</div>
<?php require('common/footer.php'); ?>
