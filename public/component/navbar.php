<?php
  session_start();
  
  $_SESSION['user_login'];
  //  if (empty($_SESSION['user_login'])){
  //     header("location:login.php");
  //   }
?> 


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="index.php"><img style="height:50px;width: auto;" src="./pictures/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./shop.php">Shop</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="./plantcare.php">plant care</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./ourstory.html">our story</a>
              <a class="dropdown-item" href="./Ourstore.html">our store</a>
              <a class="dropdown-item" href="./contactus.html">contact us</a>

            </div>
          </li>
        </ul>

        
        <form class="form-inline my-2 my-lg-0">
          
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          
          <a class="px-2" href="#">
            <span class="oi oi-magnifying-glass"></span>
          </a> -->
        </form> 
        <?php
          if(isset($_SESSION['user_login'])){
            require("../public/connect.php");
            $userid = $_SESSION['user_login'];
            
            $sql = "SELECT * FROM `user` WHERE `uid`= '$userid'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $img = $row['uimg'];
            $ahref = "profile.php";
            $ahrefCart = "basket.php";
            $imgCart = "https://cdn.discordapp.com/attachments/792729018608648204/800031463919452250/Untitled-2.png";
          }else{
            $img = "https://cdn.discordapp.com/attachments/792729018608648204/800028552811511828/Untitled-1.png";
            $ahref = "login.php";
            $ahrefCart = "#";
            $imgCart = "https://cdn.discordapp.com/attachments/792729018608648204/800033909836218398/Untitled-3.png";
          }
        ?>
        <a class="mr-2" href="<?php echo $ahrefCart;?>"disable>
              <img class="icon-img-profile-onnav" src="<?php echo $imgCart;?>" alt="">
        </a>
        <a href="<?php echo $ahref;?>">
              <img class="icon-img-profile-onnav" src="<?php echo $img;?>" alt="">
        </a>
        <!-- <a class="px-2 " href="./login.php">
              <span class="oi oi-person"></span>
        </a> -->
      </div>
    </nav>


    