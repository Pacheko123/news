<?php require('../connection.php')  ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campus Vibes | Editor Register  | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><b><span style="color: red;">Campus</span></b>vibes.</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Create a new account</p>

      <form action="reg_process.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="firstname" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>  
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="lastname" placeholder="Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
     
        <?php
          echo'<div class="form-group">
                    <!-- <label>University</label> -->
          <select class="form-control select2" style="width: 100%;" name="campus">
            <option selected="selected">University</option>';

            $sql = 'SELECT * FROM campus';
            $result = mysqli_query($con,$sql);
              if ($result) {
                while ($row =mysqli_fetch_assoc($result)) {
                  echo'<option value="'.$row['campus_id'].'">'.$row['campus_name'].'</option>';
                }
              }
                  echo'  </select>
                  </div>';
                   ?>

               <?php
                    echo'<div class="form-group">
                              <!-- <label>University</label> -->
                    <select class="form-control select2" style="width: 100%;" name="category">
                      <option selected="selected">Field of Interest</option>';

                      $sql = 'SELECT * FROM category';
                      $result = mysqli_query($con,$sql);
                        if ($result) {
                          while ($row =mysqli_fetch_assoc($result)) {
                            echo'<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
                          }
                        }
                        echo'  </select>
                          </div>';
                 ?>
            <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password2" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I accept the <a href="#">terms of use.</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.html" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
