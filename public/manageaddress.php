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
  
    <script src="./main.js"></script>
    <link rel="stylesheet" href="./css/style.css"> 

</head>
<body>
    <?php
    session_start();
        require "./component/navbar.php";
        require "./connect.php";
        $userid = $_SESSION['user_login'];
        $sql ="SELECT * FROM `address` WHERE `uid`= '3'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
    ?>
    <section class="container pt-5">
        <div class="row pt-5">

        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2>
                  Adress Details
                </h2>
                <form>
                    <div class="form-row">
                      <div class="col pt-2">
                        <label for="inputEmail4">First name</label>
                        <input type="text" class="form-control"  placeholder="First_name">
                      </div>
                      <div class="col pt-2">
                        <label for="inputEmail4">Last name</label>
                        <input type="text" class="form-control" placeholder="Last_name">
                      </div>
                      
                    </div>
                    
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputhouse_no">house_no</label>
                          <input type="text" class="form-control" value="<?php echo $row['house_no'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputprovince">province</label>
                          <input type="text" class="form-control" value="<?php echo $row['province'];?>">
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="inputdistrict">district</label>
                          <input type="text" class="form-control" value="<?php echo $row['district'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputsub-district">sub-district</label>
                          <input type="text" class="form-control" value="<?php echo $row['sub-district'];?>">
                        </div>
                      </div>
                      <div class="form-row">
                        
                        <!-- <div class="form-group col-md-4">
                          <label for="inputState">State</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div> -->
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div>
                     
                  </form>
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