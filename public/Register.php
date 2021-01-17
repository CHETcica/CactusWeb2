<?php

require_once('connect.php');

if (isset($_REQUEST['btn_register'])) {
  $username = strip_tags($_REQUEST['txt_username']);
  $email = strip_tags($_REQUEST['txt_email']);
  $password = strip_tags($_REQUEST['txt_password']);
  $password1 = strip_tags($_REQUEST['txt_password1']);
  $checkbox = strip_tags($_REQUEST['txt_checkbox']);
  if (empty($username)) {
    $errorMsg[] = "Please enter userame";
  } else if (empty($email)) {
    $errorMsg[] = "Please enter email";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg[] = "Please enter a valis email address";
  } else if (empty($password)) {
    $errorMsg[] = "Please enter password";
  } else if (strlen($password) < 6) {
    $errorMsg[] = "Password must be atleast 6 characters";
  } else if (strlen($password) != strlen($password1)) {
    $errorMsg[] = "Code does not match";
  } else {
    try {
      $select_stmt = $conn->prepare("SELECT uname,email FROM user WHERE uname = :uname OR email = :uemail");
      $select_stmt->execute(array(':uname' => $username, ':uemail' => $email));
      $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
      if ($row['uname'] == $username){
        $errorMsg[] = "sorry username already exists";
      } else if ($row['email'] == $email) {
        $errorMsg[] = "sorry email already exists";
      } else if (!isset($errorMsg)) {
        $new_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_stmt = $conn->prepare("INSERT INTO user (uname ,email,password,uimg) VALUES (:uname, :uemail, :upassword,:img_Profile)");
        $randimg = rand(1,7);
        if($randimg == '1'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269761069711370/profile1.jpg";
        }
        else if($randimg == '2'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269776999022612/profile2.jpg";
        }
        else if($randimg == '3'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269780011319326/profile3.jpg";
        }
        else if($randimg == '4'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269781693497404/profile4.jpg";
        }
        else if($randimg == '5'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269782833692672/profile5.jpg";
        }
        else if($randimg == '6'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269785073451018/profile6.jpg";
        }
        else if($randimg == '7'){
          $imgprofile = "https://cdn.discordapp.com/attachments/792729018608648204/800269786050592838/profile7.jpg";
        }
        if($insert_stmt->execute(array(
          ':uname' => $username,
          ':uemail' => $email,
          ':upassword' => $new_password,
          ':img_Profile' => $imgprofile
        ))) {
          $registerMsg = "Rrgister successfully... Please click on login account link";
        }
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    a:link {
      color: green;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited {
      color: pink;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: red;
      background-color: transparent;
      text-decoration: underline;
    }

    a:active {
      color: yellow;
      background-color: transparent;
      text-decoration: underline;
    }

    .btn_success {
      color: red;
    }
  </style>
</head>

<body>

  <div class="container text-center">
    <h1 class="mt-5">register Page</h1>
    <form action="" class="foem_horizontal mt-3" method="post">
      <?php
      if (isset($errorMsg)) {
        foreach ($errorMsg as $error) {
      ?>
          <div class="alert alert-danger">
            <strong> <?php echo $error; ?></strong>
          </div>
      <?php
        }
      }
      ?>

      <?php
      if (isset($registerMsg)) {

      ?>
        <div class="alert alert-success">
          <strong> <?php echo $registerMsg; ?></strong>
        </div>
      <?php
      }

      ?>
      <div class="form-group">
        <div class="row">
          <label for="username" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-9">
            <input type="text" name="txt_username" class="form-control" placeholder="Enter your username...">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row mt-3">
          <label for="username" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input type="text" name="txt_email" class="form-control" placeholder="Enter your email...">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row mt-3">
          <label for="password1" class="col-sm-3 control-label">password</label>
          <div class="col-sm-9">
            <input type="password" name="txt_password1" class="form-control" placeholder="Enter your password...">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row mt-3">
          <label for="password" class="col-sm-3 control-label">password</label>
          <div class="col-sm-9">
            <input type="password" name="txt_password" class="form-control" placeholder="Enter your password...">
          </div>
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="2" name="txt_checkbox" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Default checkbox
        </label>
      </div>

      <div class="form-group">
        <div class="row mt-3">
          <div class="col-sm-12">
            <input type="submit" name="btn_register" class="btn btn-success" value="Register">
          </div>
        </div>
      </div>




      <div class="form-group">
        <div class="row mt-3">
          <div class="col-sm-12">
            <p>Your have a account login here <a href="login.php">login</a></p>
          </div>
        </div>
      </div>

    </form>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>