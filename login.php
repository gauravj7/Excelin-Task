<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user Login and Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form class="" action="validation.php" method="post">
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="user" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form class="" action="registration.php" method="post">
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="user" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
