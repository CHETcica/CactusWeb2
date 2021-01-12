<!DOCTYPE html>
<html lang="en">

<?php
        include "./component/head.php";
?>

<body>
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
    ?>
    <!-- ==============================================carousel slide================================================== -->
    <div id="demo" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <!-- <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li> -->
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./pictures/caruosel1.jpg" alt="Los Angeles" width="1920" height="500" class="img-fluid">
                <div style="padding-bottom: 10%;padding-left: 40%; text-align: left;color: #606c38;" class="carousel-caption ">
                    <h3 class="" style="margin: 0; font-size: 60px;">Welcom</h3>
                    <p class="font-Sriracha" >to Oasis</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./pictures/carousel2.jpg" alt="Chicago" width="1920" height="500" class="img-fluid">
                <div style="padding-bottom: 10%;padding-left: 40%; text-align: left; color: black;" class="carousel-caption ">
                    <h4 class="">cactus</h4>
                    <p class="font-Sriracha " data-aos="flip-left">The original pot would probably be too small. Probably need time to change new pots
                        You think it must be very difficult, right?</p>
                </div>
            </div>
            <!-- <div class="carousel-item">
          <img src="./pictures/carousel3.jpg" alt="New York" width="1920" height="500" class="img-fluid">
          <div style="padding-bottom: 10%;padding-right: 40%; text-align: left;" class="carousel-caption ">
            <h3 class=""data-aos="flip-left">cuctus</h3>
            <p class="fontr"data-aos="flip-left">We love the Big Apple!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./pictures/carousel3.jpg" alt="New York" width="1920" height="500" class="img-fluid">
          <div style="padding-bottom: 10%;padding-right: 40%; text-align: left;" class="carousel-caption ">
            <h3 class=""data-aos="flip-left">cuctus</h3>
            <p class="fontr"data-aos="flip-left">We love the Big Apple!</p>
          </div>
        </div> -->
        </div><!-- </div><div class="carousel-inner"> -->
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- ===================================================container==================================================== -->
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-lg-4 col-12 mb-3 ">
                <img src="./pictures/Untitled-5.png" alt="" class="img-fluid">
                <div class="caption">
                    <h4 class="font-Dancing-Script">Easy care</h4>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3">
                <img src="./pictures/Untitled-5.png" alt="" class="img-fluid">
                <div class="caption">
                    <h4 class="font-Dancing-Script">little space</h4>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3">
                <img src="./pictures/Untitled-5.png" alt="" class="img-fluid">
                <div class="caption">
                    <h4 class="font-Dancing-Script">Inexpensive</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- subContainer====================================================================================================== -->
    <section class="test">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-3 col-12">
                    <video width="400" height="400" autoplay muted loop>
                        <source src="./pictures/vdo/Pinterest.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col8 col-lg-8 col-12">
                    <h3>Let's change the pots.</h3>
                    <p class="font-Sriracha">The original pot would probably be too small. Probably need time to change new pots
                        You think it must be very difficult, right?
                        Put it in a pot with a pot base material already waiting. And add a little more soil
                        If anyone doesn't want to see black soil, you can sprinkle some rocks on top of it.
                    </p>
                </div>
            </div>
        </div>
        <img src="./pictures/bg_web05-300x298 (1).png" alt="" class="test-bg1">
    </section>

    <!-- ================================================product==================================================== -->

    <div class="text-align-center font-Sriracha py-1">
        <hr>
        <h1>RecommendProduct</h1>
    </div>
    <div class="container-fluid">
        <section class="section_product">
            <ul id="productGrid">
                <li class="product">
                    <div class="details">
                        <h2>mickey mouse</h2>
                        <p class="price">฿50.00</p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/test001.png' alt='' />
                    </a>

                </li>
                <li class="product">
                    <div class="details">
                        <h2>mammillaria</h2>
                        <p class="price">฿75.00</p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Test002.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2>yimno</h2>
                        <p class="price">฿75.00</p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Test003.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2>haworthia</h2>
                        <p class="price">฿75.00</p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Test004.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2>astrophytum myriostigma</h2>
                        <p class="price">฿90.00</p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/test005.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2></h2>
                        <p class="price"></p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Nall.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2></h2>
                        <p class="price"></p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Nall.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2></h2>
                        <p class="price"></p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Nall.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2></h2>
                        <p class="price"></p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Nall.png' alt='' />
                    </a>
                </li>
                <li class="product">
                    <div class="details">
                        <h2></h2>
                        <p class="price"></p>
                    </div>
                    <div class="logo">
                        <img src='' alt='' />
                    </div>
                    <a href="./productDe.html" class="photo">
                        <img src='./pictures/Nall.png' alt='' />
                    </a>
                </li>

                <span></span>
            </ul>
        </section>
    </div>


    <!-- <section class="container container3">
      <div class="row">
        <div class="col-lg-3 col-12 card_product">
          <div class="card" style="width: 100%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the .</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12 card_product">
          <div class="card" style="width: 100%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fontr">Card title</h5>
              <p class="card-text fontr">Some quick example text to build on the card title and make up the .</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12 card_product">
          <div class="card" style="width: 100%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the .</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12 card_product">
          <div class="card" style="width: 100%;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the .</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <section class="test">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-sm-3 col-12">
                    <video width="400" height="400" autoplay muted loop>
                        <source src="./pictures/vdo/Pinterest_2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col8 col-lg-8 col-12">
                    <h3>Will the delivered item be safe?</h3>
                    <p class="font-Sriracha">
                        Be able to worry if He ordered a tree from us. Because of the experience in transportation We make sure that your beloved plants will reach your hand safely.</p>
                </div>
            </div>
        </div>
        <img src="./pictures/bg_web03_2.png" alt="" class="test-bg">
    </section>

    <!-- <button class="absolute z-1 bg-green-3 w-49xem h-49xem rounded-full flex items-center justify-center cursor-pointer focus:outline-none transition-chat-btn down" data-v-1cf68c77="">
      <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons" data-v-1cf68c77="">
        <use href="https://shop.line.me/_nuxt/7413aab311a9810e5b02cd6da8587f61.svg#i-icon-chat" xlink:href="https://shop.line.me/_nuxt/7413aab311a9810e5b02cd6da8587f61.svg#i-icon-chat" data-v-1cf68c77="">
        </use>
      </svg>
    </button> -->
    <section class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center py-3"></h1>
                <div class="row ultraway">
                    <div class="p-0 m-0 col-lg-2 col-sm-6 col-12">
                        <img src="./pictures/valentai.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="p-0  col-lg-2 col-sm-6 col-12">
                        <img src="./pictures/pinkpot.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="p-0 col-lg-2 col-sm-6 col-12 ">
                        <img src="./pictures/wiethpot.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="p-0 col-lg-2 col-sm-6 col-12 ">
                        <img src="./pictures/icecremcactus.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="p-0 col-lg-2 col-sm-6 col-12 ">
                        <img src="./pictures/undwe.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="p-0 col-lg-2 col-sm-6 col-12 ">
                        <img src="./pictures/./all.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    



    <!-- =====================================================   footer  ===================================================== -->
    <?php
        include "./component/footer.php";
    ?>

    <script src="./bootstrap-4.5.0-dist/js/jQuery.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/poper.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./main.js"></script>
</body>

</html>