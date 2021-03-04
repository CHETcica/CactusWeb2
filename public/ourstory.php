<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
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
    <style>
      .section-text{
        padding-top: -50px;
        width: 60%;
        height: 300px;
        text-align: center;
      }
      .up{
        padding-top: -50px;
      }
    </style>
  
</head>
<body>
    <div class="container">
      <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
    ?>
    </div>


    <section class="container">
      <div style="height: 100px;" class="row">

      </div>
      <div class="row my-5" >
        <div class="col-lg-6 col-12">  
          <img src="./pictures/./peper2.png" alt="">
          <div class="caption">
            <h1 class="font-Dancing-Script">Our Story</h1>
          </div>
        </div>

        <div class="col-lg-6 col-12 ">
          <img src="./pictures/peper3.png" alt="">
          <div style="padding-bottom: 10%;padding-left: 40%; text-align: left;color: #0d3a6e;" class="caption pl-5">
            <h4 class="font-Dancing-Script section-text pl-5">odio facilis error qui pariatur quae accusamus dolores</h4>
          </div>
        </div>
      </div>
      <div class="row">
        
      </div>
      <div class="row mt-5">
        <div class="col-lg-6 col-12">
          
            <div class="caption ">
              <h4 class="font-Dancing-Script section-text pl-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit vero accusamus dolore magni corporis ad nemo veritatis illo id eligendi. Harum officia hic neque corporis sint porro magni quidem ab!</h4>
            </div>
        </div>

        <div class="col-lg-6 col-12">
          
          <div class="caption ">
            <h4 class="font-Dancing-Script">Easy care</h4>
          </div>
        </div>
      </div>
    </section>
    <section class="container">
      <center>
        <h1 class="mt-5">
        Developer
      </h1>
      </center>
      
      <div class="row my-5">
        <div class="col-lg-4 col-12">
          <img src="./pictures/aum.png" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <img src="./pictures/pin.png" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <img src="./pictures/Chet.png" alt="">
        </div>
        
      </div>
    </section>
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