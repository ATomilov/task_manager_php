<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Errors</title>
  <?php include 'links.php'?>
</head>

<body>
  <section class="hero is-primary is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-5-tablet is-4-desktop is-3-tablet is-centered">
          <div class="column is-half">
            <article class="message is-danger">
              <div class="message-header">
                <p>Error</p>
              </div>
              <?php if($errorMessage):?>
              <div class="message-body">
                <?php echo($errorMessage);?>
              </div>
              <?php else: ?>
              <div class="message-body">
                Fill all inputs, please.
              </div>
              <?php endif;?>
            </article>
            <div class="container has-text-centered">
              <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button is-black">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>