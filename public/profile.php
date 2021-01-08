<?php
    
    require ('connect.php');
    $sql = "SELECT * FROM customer WHERE CusID ='3'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    
?>


<head>
    <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
  integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
  integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- update the version number as needed -->
  <script defer src="/__/firebase/7.17.1/firebase-app.js"></script>
  <!-- include only the Firebase features as you need -->
  <script defer src="/__/firebase/7.17.1/firebase-auth.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-database.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-messaging.js"></script>
  <script defer src="/__/firebase/7.17.1/firebase-storage.js"></script>
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"
  integrity="sha512-UyNhw5RNpQaCai2EdC+Js0QL4RlVmiq41DkmCJsRV3ZxipG2L0HhTqIf/H9Hp8ez2EnFlkBnjRGJU2stW3Lj+w=="
  crossorigin="anonymous" />
  <!-- initialize the SDK after all desired features are loaded -->
  <script defer src="/__/firebase/init.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap"rel="stylesheet">
  <script src="./main.js"></script>
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link rel="stylesheet" href="./css/style.css">
  </head>
  
  <body>
    <!---flude========================================container-fluid================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="indexAfter.html"><img style="height:50px;width: auto;" src="./pictures/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./shop.php">Shop</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link " href="#">service</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link " href="./plantcare.html">plant care</a>
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
          
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          
          <a class="px-2" href="#">
            <span class="oi oi-magnifying-glass"></span>
          </a>
        </form>
        
        <a href="profile.php">
            <img class="icon-img-profile-onnav" src="./pictures/img_415067.png" alt="">

        </a>
         
           
        


        <!-- <a class="px-2 " href="./login.php">
          <span class="oi oi-person"></span>
        </a> -->

      </div>
    </nav>
    <div>
                  
      <h1 class="profile-header">Profile</h1>
      
    </div>
     <div class="container bg-profile">
          <div class="row">
            <div class="col-lg-4 col- 12 ">
              <img class="img-profile" src="<?php echo $row['Imgprofile'] ?>" alt="">
              <div class="bg-img-profile"></div>
              
            </div>
            <div class="col-lg-8 col-12">
              <div class="id_user">ID : <div class="id_user_fromtable">0000<?php echo $row['CusID'] ?></div></div>
              <hr>
              <div class="name_user">Name : <div class="name_user_fromtable"><?php echo $row['Name'] ?></div></div>
              <div class="name_user">Lastname : <div class="name_user_fromtable"><?php echo $row['Lastname'] ?></div></div>
              <div class="name_user">Email : <div class="name_user_fromtable"><?php echo $row['Email'] ?></div></div>
              <div class="name_user">Phone : <div class="name_user_fromtable"><?php echo $row['Phone'] ?></div></div>
              <div class="name_user">Address : <div class="name_user_fromtable"><?php echo $row['Address'] ?></div></div>
              <button type="button" class="btn btn-outline-success btn-group-profile">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-group-profile">Close</button>
              <a href="index.html">
                  <button type="button" class="btn btn-outline-warning btn-group-profile">Logout</button>
              </a>
          
              

            </div>
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
