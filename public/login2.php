<?php
        include "./component/head.php";
?>

<body>

      <!---flude========================================container-fluid================================================== -->
      <?php
        include "./component/navbar.php";
      ?>
  <div class="container" style="border-radius: 15px;">

    <div class="col-lg-10 col-12 bg-white text-Dark">
      <form>
        <div class="form-group">
          <p>&#127797;<i>Login</i>&#127797;</p>
          <label for="exampleInputEmail1">Email address/Username</label>
          <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
            else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword">
        </div>
        <p style="font-size: 20px;">Not yet a member? <a href="Register.php">&nbsp Sign Up</a></p>
        <button onclick="topercentageProgram()" class="btn btn-primary">Go</button>
      </form>
    </div>

  </div>

  <footer class="footer ">
    <div class="row">
      <div class="col-lg col-12   ">
        <h2 class="font-Dancing-Script">Shop</h2>
        <div>
          <p>cactus</p>
          <p>garden</p>
        </div>
      </div>
      <div class="col-lg col-12 ">
        <h2 class="font-Dancing-Script">Help</h2>
        <p>contact us</p>
        <p>shippin policy</p>
        <p>privacy policy</p>

      </div>
      <div class="col-lg col-12 ">
        <h2 class="font-Dancing-Script">Follow</h2>
        <div>
          <a href="#"><img src="./pictures/icon/Mwssage.png" alt="" class="icon-style"></a>
          <a href="#"><img src="./pictures/icon/line.png" alt="" class="icon-style"></a>
          <a href="#"><img src="./pictures/icon/ig1.png" alt="" class="icon-style"></a>
        </div>
      </div>
      <div class="col-lg col-12 ">
        <h2 class="font-Dancing-Script">About</h2>
        <p>our story</p>
        <p>service</p>
      </div>
      <div class="col-lg col-12 ">
        <h2 class="font-Dancing-Script">Visit</h2>
        <p>Oasis Shop</p>
        <p>24H Shop</p>
        <p> 07:00AM - 11:00PM </p>
      </div>
    </div>
  </footer>




  <script src="./main.js"></script>
</body>

</html>