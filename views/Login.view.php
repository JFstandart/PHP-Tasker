<?php require('common/head.php'); ?>
<div class="background-title" id="background">
  <h1 class="login-title">Login</h1>
  <div class="goodForm">
    <form action="/login.php" method="post">
      <input class="input-element" type="text" id="Username" name="Username" placeholder="Username" required>
      <p class="Error-text"><?php echo $error ?></p>
      <input class="input-element" type="password" id="Password" name="Password" placeholder="Password" required>
      <br>
      <button class="button-element" type="submit" name="button">Login</button>
    </form>
  </div>
</div>
<?php require('common/footer.php'); ?>
