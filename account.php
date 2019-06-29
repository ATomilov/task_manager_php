<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My tasks (<?php echo $_SESSION['session_username'];?>)</title>
  <?php include 'templates/links.php'?>
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="actions/logout.php" class="button is-light">
              Log out
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</body>
</html>