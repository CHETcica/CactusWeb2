<?php

require('connect.php');
$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql);
$stmt->execute();

?>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha512-UyNhw5RNpQaCai2EdC+Js0QL4RlVmiq41DkmCJsRV3ZxipG2L0HhTqIf/H9Hp8ez2EnFlkBnjRGJU2stW3Lj+w==" crossorigin="anonymous" />
    <!-- initialize the SDK after all desired features are loaded -->
    <script defer src="/__/firebase/init.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="./node_modules/@glidejs/glide/dist/css/./glide.theme.min.css">


    <script src="./main.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

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
    <div id="carouselExampleSlidesOnly" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active carousel-item-shop">
                <img src="./pictures/wachistudio_22344443_1233915353421257_5891041095256637440_n.jpg" class="someting" alt="...">
                <div class="carousel-caption ">
                    <h3 style="font-size: 100px;">Shop</h3>

                </div>
            </div>
            <div class="carousel-item carousel-item-shop">
                <img src="./pictures/wachistudio_22802841_1921321148119626_1554253827249537024_n.jpg" class="someting" alt="...">
                <div class="carousel-caption ">
                    <h3 style="font-size: 100px;">Shop</h3>

                </div>
            </div>
            <div class=" carousel-item carousel-item-shop">
                <img src="./pictures/wachistudio_26864207_763102197211669_8580582378022371328_n.jpg" class="someting" alt="...">
                <div class="carousel-caption ">
                    <h3 style="font-size: 100px;">Shop</h3>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-3">
                <div class="col-lg col-sm-6 col-12">

                    <div class="card-shop-menu-img">
                        <a href="#Gymnocalycium"><img src="./pictures/./gymnocalycium_mihanovichii_variegata_01.jpg" style="transform: translateY(-10%);" class=" img-fluid" alt=""></a>
                        <h5>Gymnocalycium</h5>
                    </div>



                </div>
                <div class="col-lg col-sm-6 col-12">
                    <div class="card-shop-menu-img">
                        <img src="./pictures/./cb24adb8daf8a52d76ad5f7a736b67e6.jpg" style="transform: translateY(-34%);" class=" img-fluid" alt="">
                        <h5>Astropitum</h5>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-12">
                    <div class="card-shop-menu-img">
                        <img src="./pictures/./4c968389f3c89fb0db565a55e48697fb.jpg" style="transform: translateY(-10%);" class=" img-fluid" alt="">
                        <h5>Mammillaria</h5>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-12">
                    <div class="card-shop-menu-img">
                        <img src="./pictures/./03ee81412c58298551f50f94c16ad4bc.jpg" style="transform: translateY(-5%);" class=" img-fluid" alt="">
                        <h5>Opuntia</h5>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-12">
                    <div class="card-shop-menu-img">
                        <img src="./pictures/./92232980-59F5-4CD7-B06E-440F090EDD2E_900x.jpg" style="transform: translateY(0%);" class=" img-fluid" alt="">
                        <h5>Echeveria</h5>
                    </div>
                </div>

            </div>
        </div>


        <section>
            <div class="container">
                <!-- <div class="row ">
        <h4 class="font-Sriracha py-5">Astrophytum</h4>
      </div> -->
                <div class="row section-row-up">

                    <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                        <div class="col-lg-3 col-sm-6 col-12 mt-5">
                            <div class="card" style="width: 105%;">
                                <div class="card-img-top-OF">
                                  <img src="<?php echo $row['Cac_img'] ?>" class="card-img-top " alt="...">
                                </div>
                                    
                                
                                <div class="card-body">
                                    <a href="./product1-1.html" class="card-link">

                                        <h5 class="card-title font-Sriracha"><?php echo $row['Cac_name'] ?></h5>
                                    </a>
                                    <h6 class="card-text font-Sriracha">
                                        Size <?php echo $row['Cac_Size'] ?> CM.
                                        <br>
                                    </h6>

                                </div>
                                <div class="container">
                                    <div class="card-body-1">
                                    <h5 class="card-text1 pt-4 font-Sriracha"><?php echo $row['Cac_Price'] ?></h5>
                                        
                                     <a href="productDe.php?idemp=<?php echo $row['Cac_id']?>"><button type="submit" class="btn btn-primary">Add to Cart</button></a>   
                                    
                                        
                                        

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>




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