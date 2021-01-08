<?php

require('connect.php');
$sql = "SELECT `BasketID`, `Amout`,`Cac_img`,`Cac_name`,`Cac_Price`, `Sumprice`, `StatusBK`, `CusID`, product.Cac_img 
FROM `basket` INNER JOIN product WHERE product.Cac_id=basket.Cac_id and `CusID`=1";
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
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"integrity="sha512-UyNhw5RNpQaCai2EdC+Js0QL4RlVmiq41DkmCJsRV3ZxipG2L0HhTqIf/H9Hp8ez2EnFlkBnjRGJU2stW3Lj+w=="crossorigin="anonymous" />
  <!-- initialize the SDK after all desired features are loaded -->
  <script defer src="/__/firebase/init.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap"rel="stylesheet">
  
  <script src="./main.js"></script>
  <link rel="stylesheet" href="./css/style.css"> 
  <style>
      
  </style>
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
<section class="container mb-3">
  <div class="row">
    <div class="col-lg-9">
      <div class="row pt-5 mt-5"></div>
    <div class="row bg-w">
          <div class="col-lg-1 ">
              <div class="form-group form-check form-check-product-select">
                  <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Product</label>
              </div>
          </div>
        <div class="col-lg-4 ">
            
        </div>
        <div class="col">
            <p>
                price/unit
            </p>
        </div>
        <div class="col">
            <p>
                number
            </p>
        </div>
        <div class="col">
          <p>
              sumprice
          </p>
      </div>
    </div>

    
    <!-- ==================================================================================================== -->
    <?php
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>



    <div class="">
      <div class="row bg-w my-3">
          <div class="col-lg-1  ">
              <div class="form-group form-check form-check-product-select">
                  <!-- <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1"></label> -->
              
                <form action="./php/multipleDelete.php" method="POST">
                    <input class="form-check-input " type="checkbox" name="checkDelete[]"  value="<?php echo $row['BasketID'];?>" id="checkdelete">
              </div>    
          </div>
        <div class="col-lg-4 col-1 ">
            <img class="py-1" src="<?php echo $row['Cac_img']?>" height="50px" alt="">
            <p class="inline-box sumprice"><?php echo $row['Cac_name']?></p>
        </div>
        <div class="col-lg-2 col-1 sumprice">
          <div>
            <p id="price">
              <?php echo $row['Cac_Price']?>
            </p>
             
          </div>  
          
        </div>
        <div class="col-lg-3 col-1 ">
            <p >
              <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="minusplus btn btn-outline-secondary btn-minus">-</button>
                  </div>
                  <input class="form-control text-center" value="<?php echo $row['Amout']?>" min="1" max="1000" type="number" id="amount">
                  <div class="input-group-append">
                    <button class="minusplus btn btn-outline-secondary btn-plus">+</button>
                  </div>
                </div>
            </p>
        </div>
        <div class="col-lg-2 col-1 sumprice">
          <p id="total">
              <?php
                  echo $row['Sumprice'];
              ?>
          </p>
      </div>
      </div>
    </div>



    <?php
      }
    ?> 
    </form>

      <input type="submit" value="SelectAll" onclick="checkAll()" class="btn btn-primary" >
      <input type="submit" value="ยกเลิก" onclick="uncheckAll()" class="btn btn-danger" >




    </div>
    <div class="col-lg-3">
      <div class="row pt-5 mt-5 "></div>
      <div class="card bg-w" style="width: 110%;">
        <div class="card-body">
          
          <h5 class="card-title">conclude</h5>
          <p class="card-text">Total (amount)<span class="Totalamount"  id="Totalamount">--</span></p>
          <p class="card-text">Shipping cost<span class="Totalamount"  id="">--</span></p>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Discount code" aria-label="Search">
            
          </form>
          <a href="./order.html" class="btn btn-primary btn-bottom">Payment</a>
        </div>
      </div>
      
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
  <script>
    $('.btn-plus, .btn-minus').on('click', function(e) {
      const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
      const input = $(e.target).closest('.input-group').find('input');
      const amountElem = document.getElementById('amount');
       const totalElem = document.getElementById('total');

    
     
      if (input.is('input')) {
        input[0][isNegative ? 'stepDown' : 'stepUp']()
        totalElem.innerText = amountElem.value * document.getElementById('price').innerText;

      }
      
    })
    function checkAll(){
            console.log("เลือกทั้งหมด")
            let form_element=document.forms[1].length;
            for(i=0;i<form_element-1;i++){
                document.forms[1].elements[i].checked=true;
            }
        }
        function uncheckAll(){
            console.log("ยกเลิก")
            let form_element=document.forms[1].length;
            for(i=0;i<form_element-1;i++){
                document.forms[1].elements[i].checked=false;
            }
        }

    






  </script>
</body>
</html>