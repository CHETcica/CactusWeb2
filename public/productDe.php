<?php

$cactusid = $_GET["idemp"];

require('connect.php');
$sql = "SELECT * FROM product WHERE `Cac_id`=$cactusid";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"integrity="sha512-UyNhw5RNpQaCai2EdC+Js0QL4RlVmiq41DkmCJsRV3ZxipG2L0HhTqIf/H9Hp8ez2EnFlkBnjRGJU2stW3Lj+w=="crossorigin="anonymous" />
    <!-- initialize the SDK after all desired features are loaded -->
    <script defer src="/__/firebase/init.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap"rel="stylesheet">
    
   
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
    <div class="container my-2">
        <div class="row pt-5">
            <div class="col-12">
                <h3 class="name font-Sriracha"><?php echo $row['Cac_Type'] ?></h3>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide p-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $row['Cac_img'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $row['Cac_img'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $row['Cac_img'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> 
            </div>
            <div class="col-4">
                <div class="card astrophythum" style="width: 18rem;height: 390px;">
                    <h4><?php echo $row['Cac_name'] ?></h4>
                    <br>
                    <h6 class="card-text">Existing. &nbsp <?php echo $row['Cac_Existing'] ?> &nbsp port</h6>
                    <br>
                    <h6 class="card-text">from: &nbsp <?php echo $row['Cac_Farm'] ?></h6>
                    <br>
                    <h6 class="card-text"> Size <?php echo $row['Cac_Size'] ?> CM.</h6>
                    <hr>
                    <h4 class="card-text1">฿<?php echo $row['Cac_Price'] ?> </h4>
                    <div class="row">
                      <div class="col-4">amount</div>
                      <div class="col-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <button class="minusplus btn btn-outline-secondary btn-minus">-</button>
                          </div>
                          <input class="form-control text-center" value="1" min="1" max="1000" type="number"id="CactusAmount" >
                          <div class="input-group-append">
                            <button class="minusplus btn btn-outline-secondary btn-plus">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                     

                    <div class="container">
                        <div class="card-body-1">

                          <a href="./php/insertbasket.php?Cactusid=<?php echo $row['Cac_id'] ?>&Customerid=<?php echo '3' ?>&CactusAmount=" id="getcactus" class="card-link AtcPosition">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                          </a>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-12">
                <div class="card" style="width: 100%; height: 150px">
                  <div class="p-3">
                    <h4 class="name-astrophythum1 pt-2">Ask more</h4>
                    <h4 class="name-astrophythum1 ">  line - Oasis-cactus </h4>
                    <h4 class="name-astrophythum2 ">  Call  - 099-999-9997 </h4>
                  </div>
                    

                </div>
            </div>
        </div>

        <div class="row section-row-up">
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card" style="width: 105%;">
              <a href="./productDe.html">
                <img src="./pictures/astrophythum_asterias.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="./astrophythum-big.html" class="card-link">
    
                  <h5 class="card-title font-Sriracha">Astrophytum  asterias</h5>
                </a>
                <h6 class="card-text font-Sriracha">
                  Size 5 CM.
                  <br>
                </h6>
    
              </div>
              <div class="container">
                <div class="card-body-1">
                  <h5 class="card-text1 pt-4 font-Sriracha">฿100</h5>
                  <a href="./productDe.html " class="card-link font-Sriracha">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card" style="width: 105%;">
              <a href="./productDe.html">
                <img src="./pictures/astrophytum_asterias_super_kabuto_02.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="./productDe.html" class="card-link">
    
                  <h5 class="card-title font-Sriracha">Astrophytum asterias super kabuto</h5>
                </a>
                <h6 class="card-text font-Sriracha">
                  Size 5 CM.
                  <br>
                </h6>
    
              </div>
              <div class="container">
                <div class="card-body-1">
                  <h5 class="card-text1 font-Sriracha">฿100</h5>
                  <a href="./productDe.html" class="card-link font-Sriracha">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card" style="width: 105%;">
              <a href="./productDe.html">
                <img src="./pictures/astrophytum_asterias_nudum_03.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="./product1-1.html" class="card-link">
    
                  <h5 class="card-title font-Sriracha">Astrophytum asterias nudum</h5>
                </a>
                <h6 class="card-text font-Sriracha">
                  Size 5 CM.
                  <br>
                </h6>
    
              </div>
              <div class="container">
                <div class="card-body-1">
                  <h5 class="card-text1 font-Sriracha">฿100</h5>
                  <a href="./productDe.html" class="card-link font-Sriracha">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-sm-6 col-12 ">
            <div class="card" style="width: 105%;">
              <a href="./productDe.html">
                <img src="./pictures/astrophythum_asterias.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <a href="./product1-1.html" class="card-link">
    
                  <h5 class="card-title font-Sriracha">Astrophytum asterias</h5>
                </a>
                <div class="card-text font-Sriracha">
                  <h6>
                    Size 3 CM.
                    <br>
                  </h6>
                </div>
    
    
              </div>
              <div class="container">
                <div class="card-body-1">
                  <h5 class="card-text1 font-Sriracha">฿50</h5>
                  <a href="./productDe.html" class="card-link font-Sriracha">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
    
    
        </div>

    </div>
    <!-- =====================================================   footer  ===================================================== -->
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./main.js"></script>

    <script>
      $('.btn-plus, .btn-minus').on('click', function(e) {
        const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        const input = $(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
        
      })
      let link = document.getElementById("getcactus");
        link.addEventListener('click',Getcactus );

        function Getcactus(event){

          event.preventDefault();

        let CactusAmount = document.getElementById("CactusAmount");
        let linkVal = link.getAttribute('href');
        linkVal += CactusAmount.value
                               
        window.open(linkVal, '_self');      
      }


      

    </script>
    
</body>

</html>