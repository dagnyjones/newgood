<?php

session_start();

include ("includes/top.php");
include ("../includes/connect.php");

if (isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM admins WHERE username = '$email' AND password = '$password'";

  $results = $conn-> query($sql);

  $final = $results-> fetch_assoc();

  $_SESSION['email'] = $final['username'];
  $_SESSION['password'] = $final['password'];

  

  if ($email = $final['username'] AND $password = $final['password']){
    header('location: index.php');
  }else{
    header('location: adminlogin.php');
  }
}

?>
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>

    <div class="col-sm-4">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">
            ADMIN LOGIN
          </h3>
        </div>

        <form class="form-horizontal" action="adminlogin.php" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">

              </div>
            </div>
          </div>
      </div>

      <div class="container">
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right" name="login">Sign in</button>
        </div>
        <!-- /.box-footer -->
        </form>
      </div>

    </div>


    <div class="col-sm-4"></div>
  </div>
</div>