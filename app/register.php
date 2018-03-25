<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<body class="login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row  h-100">
          <div class="brand-lg">
            <img src="assets/images/upoulogo.png">
          </div>
          <div class="card-wrapper">
          <div class="brand">
            <a href="index.php">
              <img src="assets/images/upoulogo.png">
            </a>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Register</h4>
              <form method="POST">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="password">Password</label>
                      <input class="form-control" name="password" id="password" type="text"  placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <label for="password">Password</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username"> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>


                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  Already have an account? <a href="register.html">Login now</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha 
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>