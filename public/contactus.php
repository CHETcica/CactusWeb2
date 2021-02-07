<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cactus</title>
  
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
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./main.js"></script>
  
</head>
<body>
    <div class="container">
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
    <div  class="row section-row-container">
        <div class="col">
          <h1 class="text-align-center">Oasis</h1>
          <h1 class="text-align-center">your online cuctus store</h1>
          <p class="text-align-center">Terrarium / HousePlants / Gardening Tools / Workshop</p>
          <p class="text-align-center py-2 ">Visit us at</p>
          <hr>
          <p class="text-align-center">Tiny Tree , Sukhumvit 54&nbsp</p>
          <p class="text-align-center">open 07:00AM - 11:00PM</p>
          <p class="text-align-center">Close : Tuesday & Wednesday</p>
<hr>
          <p class="text-align-center pt-3">Tiny Tree , EmQuartier</p>
          <p class="text-align-center">4th floor, Helix Building</p>
          <p class="text-align-center">Open 11:00 AM – 08:00 PM Everyday	</p>
        </div>
    </div>
       <div class="row section-row-container">
            <div class="col-lg-4 col-12"> 
                <div class="contactus-section-col-item">
                  <img class="contactus-section-col-img" src="https://www.tinytreegarden.com/wp-content/uploads/tinytree-icon-tel.png" alt="">
                 <h4 class="text-align-center" >Call Us</h4>
                 <p class="text-align-center">082-3636036</p>
                </div>
            </div>
            <div class="col-lg-4 col-12"> 
              <div class="contactus-section-col-item">
                <img class="contactus-section-col-img" src="https://www.tinytreegarden.com/wp-content/uploads/tinytree-icon-e-mail.png" alt="">
               <h4 class="text-align-center">Mail</h4>
               <p class="text-align-center">Oasis@webmail.npru.ac.th</p>
              </div>
            </div>
            <div class="col-lg-4 col-12"> 
              <div class="contactus-section-col-item">
                <img class="contactus-section-col-img" src="https://www.tinytreegarden.com/wp-content/uploads/tinytree-icon-chat.png" alt="">
               <h4 class="text-align-center">Line id</h4>
               <p class="text-align-center">@Oasis_62/45</p>
              </div>
            </div>
       </div>    
    </div>
    <footer class="footer">
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
            <p>© 2019 Oasis-cactus</p>
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
    <script src="./bootstrap-4.5.0-dist/js/jQuery.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/poper.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
        <!-- <div class="container"></div> -->
</body>
</html>