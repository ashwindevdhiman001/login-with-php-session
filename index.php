<?php

// Note: The session_start() function must be the very first thing in your document. Before any HTML tags and any php code.
session_start();
// print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login With Php Session</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/css/bootstrap4.3.1.min.css">
  <script src="lib/js/jquery3.4.1.min.js"></script>
  <script src="lib/js/popper1.14.7.min.js"></script>
  <script src="lib/js/bootstrap4.3.1.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 mt-4">
        <?php 
        if(!empty($_GET['msg'])){
        ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?= $_GET['msg']?></strong>
        </div>
        <?php 
        }
        ?>
        <div class="card">
          <?php 
          if(!empty($_SESSION) && $_SESSION['is_login'] === true){
          ?>
          <div class="card-body">
            <h2>Hi , <?= $_SESSION['user_email']?></h2>
            <a href="login-action/logout.php">
              <button class="btn btn-danger">Logout</button>
            </a>
          </div>
          <?php 
          }else{
          ?>
          <div class="card-body">
            <h2>Login</h2>
            <form action="login-action/login_action.php" method="POST">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>