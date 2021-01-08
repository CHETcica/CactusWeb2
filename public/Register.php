<?php
    session_start(); 
    require './connect.php';
    

    if(isset($_REQUEST['btn_register'])){
        $username = strip_tags($_REQUEST['username']);
        $email = strip_tags($_REQUEST['email']);
        $password = strip_tags($_REQUEST['password']);
        $password_confirm = strip_tags($_REQUEST['password_confirm']);

        if(empty($username)){
            $errorMsg[] = "Please enter username.";
           
        }
        else if(empty($email)){
            $errorMsg[] = "Please enter email.";
        }
        // else if(empty(!filter_var($email,FILTER_VALIDATE_EMAIL))){
        //     $errorMsg[] = "Please enter a valid email address.";
        // }
        else if(empty($password)){
            $errorMsg[] = "Please enter password.";
        }
        else if(strlen($password) < 6){
            $errorMsg[] = "Password must be atleast 6 characters.";
        }
        else{
            try{
                $select_stmt = $conn->prepare("SELECT `Name`,`Email` FROM `customer` WHERE `Name`= '$username' OR Email = '$email' ");
                $select_stmt->execute(array(':NAMES'=>$username,':EMAIL'=>$email));
    
                if($row['Name']== $username ){
                    $errorMsg[] = "Sorry username already exists.";
                }
                else if($row['Email']){
                    $errorMsg[] = "Sorry email already exists.";

                }
                else if(!isset($errorMsg))
                    $new_password =password_hash($password,PASSWORD_DEFAULT);
                    $insert_stmt = $conn->prepare("INSERT INTO `customer`(`Name`, `Lastname`, `Imgprofile`, `Email`, `Password`, `Phone`, `Address`) 
                                                                    VALUES (:NAMES,:LASTNAME,:IMGPROFILE,:EMAIL,:PASSWORD,:PHONE,:ADDRESSs)");
                    if($insert_stmt->execute(array(
                        ':NAMES'=> $username,
                        ':LASTNAME' => $_POST['lastname'],
                        ':IMGPROFILE' =>  $_POST['Imgprofile'],
                        ':EMAIL' => $email,
                        ':PASSWORD' => md5($password),
                        ':PHONE' => $_POST['Phone_number'],
                        ':ADDRESSs' => $_POST['Address'],

                    ))){
                        $registerMsg = "Register successfully ...";
                    }

            }
            catch(PDOException $e){
                $e->getMessage();
            } 
        }
   
    }

    
    // require '../connect.php';
    // $sql = "INSERT INTO `customer`(`Name`, `Lastname`, `Imgprofile`, `Email`, `Password`, `Phone`, `Address`) 
    // VALUES (:NAMES,:LASTNAME,:IMGPROFILE,:EMAIL,:PASSWORDS,:PHONE,:ADDRESSs)";
    // $stmt = $conn->prepare($sql);
    
    // $stmt->bindParam(':NAMES', $_POST['username']);
    // $stmt->bindParam(':LASTNAME', $_POST['lastname']);
    // $stmt->bindParam(':IMGPROFILE', $_POST['Imgprofile']);
	//   $stmt->bindParam(':EMAIL', $_POST['email']);
    // $stmt->bindParam(':PASSWORDS', $_POST['password_confirm']);
    //$stmt->bindParam(':PHONE', $_POST['Phone_number']);
	//   $stmt->bindParam(':ADDRESSs', $_POST['Address']);
	

	

    // if ($stmt->execute()):
    //     $message = 'yes';
    //     header('location:indexAfter.html');
    //     exit(0);
    // else:
    //     $message = 'no';
    //     echo $_POST['username']."<br>";
    //     echo $_POST['lastname']."<br>";
    //     echo $_POST['Imgprofile']."<br>";
    //     echo $_POST['email']."<br>";
    //     echo $_POST['password_confirm']."<br>";
    //     echo $_POST['Phone_number']."<br>";
    //     echo $_POST['Address']."<br>";
    // endif;
    // echo $message;
    // $conn = null; 
?>

<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- update the version number as needed -->
  <script defer src="/__/firebase/7.17.1/firebase-app.js"></script>
  <!-- include only the Firebase features as you need -->
  <script defer src="/__/firebase/7.17.1/firebase-auth.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-database.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-messaging.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-storage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha512-UyNhw5RNpQaCai2EdC+Js0QL4RlVmiq41DkmCJsRV3ZxipG2L0HhTqIf/H9Hp8ez2EnFlkBnjRGJU2stW3Lj+w==" crossorigin="anonymous" />
  <!-- initialize the SDK after all desired features are loaded -->
  <script defer src="/__/firebase/init.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <script src="./main.js"></script>
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!---flude========================================container-fluid================================================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.html"><img style="height:50px;width: auto;" src="./pictures/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./shop.html">Shop</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link " href="#">service</a>
          </li> -->
        <li class="nav-item">
          <a class="nav-link " href="./plantcare.html">plant care</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="pr-5" href="./THindex.html">TH</a>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

        <a class="px-2" href="#">
          <span class="oi oi-magnifying-glass"></span>
        </a>
      </form>
      <a class="px-2 " href="./login.html">
        <span class="oi oi-person"></span>
      </a>
    </div>
  </nav>
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

  <footer class="footer mt-5">
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