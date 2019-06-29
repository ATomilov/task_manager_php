<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple task manager!</title>
    <?php include 'templates/links.php'?>
  </head>
  <body>
    <section class="hero is-primary is-fullheight">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-5-tablet is-4-desktop is-3-tablet is-centered">
            <div class="column is-half">
              <form class="box" action="actions/register.php" method="post">
                <div class="container has-text-centered">Registration</div>
                <div class="field">
                  <label class="label">Name</label>
                  <div class="control has-icons-left">
                    <input type="text" class="input" placeholder="A Tomilov" name="username" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left">
                    <input type="email" class="input" placeholder="e.g. hkakehas@cisco.com" name="email" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Password</label>
                  <div class="control has-icons-left">
                    <input type="password" class="input" placeholder="*********" name="password" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="checkbox">
                    <input type="checkbox">Remember me</label>
                </div>
                <div class="field">
                  <button class="button is-success" type="submit">Register</button>
                  <a href="/login-form.php" class="button is-success" type="submit">Sign in</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>