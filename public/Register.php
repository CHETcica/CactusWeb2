<?php
        include "./component/head.php";
?>

<body>

  <!---flude========================================container-fluid================================================== -->
  <?php
        include "./component/navbar.php";
    ?>
  <div class="container" style="border-radius: 15px;">



    <div class="col-lg-12 col-12 bg-white text-Dlke">
      <!-- ******************************* -->
      <form action="./php/registerinsert.php" method="POST">
        <?php
          if(isset($errorMsg)){
            foreach($errorMsg as $error){
        ?>
          <div class="alert alert-danger">
            <strong><?php echo $error;?></strong>
          </div>
              
        <?php
            }
          }
        ?>
        <?php
          if(isset($registerMsg)){   
        ?>
          <div class="alert alert-danger">
          <strong><?php echo $registerMsg;?></strong>
          </div>
              
        <?php
            
          }
        ?>
        <p>&#127797;<i>Register </i>&#127797;</p>

        <fieldset>
          <div id="legend">
          </div>
          <div class="control-group">
            <!-- Username -->
            <label class="control-label" for="username">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never .</small>
          </div>

          <div class="control-group">
            <!-- Username -->
            <label class="control-label" for="last name">Last name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" last name="lastname" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted"> Enter your full name .</small>
          </div>
          <div class="control-group">
            <!-- img -->
            <label class="control-label" for="username">Link Profile</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Imgprofile" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
              <input type="text" class="form-control" id="email" name="email" aria-describedby="" class="input-xlarge">
              <small id="help-block" class="form-text text-muted">Please provide your E-mail</small>
            </div>
          </div>

          <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input type="password" class="form-control" id="password" name="password" aria-describedby="" class="input-xlarge">
              <small id="help-block" class="form-text text-muted">Password should be at least 4
                characters</small>
            </div>
          </div>

          <div class="control-group">
            <!-- Password -->
            <label class="control-label" for="password_confirm">Password (Confirm)</label>
            <div class="controls">
              <input type="password" class="form-control" name="password_confirm" aria-describedby="" class="input-xlarge">
              <small id="help-block" class="form-text text-muted">Please confirm password</small>
            </div>
          </div>
          <div class="control-group">
            <!-- Username -->
            <label class="control-label" for="Phonenumber">Phone number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Phone_number" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Enter phone number.</small>
          </div>
          <div class="control-group">
            <!-- Username -->
            <label class="control-label" for="Address">Address</label>
            <textarea class="form-control fixregtextarea" id="exampleInputEmail1" rows="3" cols="60" name="Address" required=""></textarea>
            <!--<textarea><input type="text" class="form-control" id="exampleInputEmail1"Address="Address" aria-describedby="emailHelp">-->
            <small id="emailHelp" class="form-text text-muted"> Enter address .</small>
          </div>
          </textarea>

          <div class="control-group">
            <p style="font-size: 20px;">Already a member? <a href="login.php">&nbsp Sign in</a></p>
            <!-- Button -->
            <div class="controls">
              <button type="submit" name="btn_register" class="btn btn-primary">Register</button>
            </div>

          </div>
        </fieldset>
      </form>
    </div>




  </div>

  <!-- =====================================================   footer  ===================================================== -->
  <?php
        include "./component/footer.php";
    ?>




  <script src="./main.js"></script>
</body>

</html>