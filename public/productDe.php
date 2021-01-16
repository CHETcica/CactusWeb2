<!DOCTYPE html>
<html lang="en">

<?php
        include "./component/head.php";
?>

<body>
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
    

    $cactusid = $_GET["idemp"];

    require('connect.php');
    $sql = "SELECT * FROM product WHERE `Cac_id`=$cactusid";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>  
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

                          <a href="./php/insertbasket.php?Cactusid=<?php echo $row['Cac_id'] ?>&Customerid=<?php echo $_SESSION['user_login'] ?>&CactusAmount=" 
                          id="getcactus" class="card-link AtcPosition">
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
    <?php
        include "./component/footer.php";
    ?>
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
          //5
          let linkVal = link.getAttribute('href');
          //localhost/avice/?name=cpu&num=
          linkVal += CactusAmount.value
          //localhost/avice/?name=cpu&num=5                  
          window.open(linkVal, '_self');   
          //<a href="localhost/avice/?name=cpu&num=5"></a> 
      }

    </script>
    
</body>

</html>