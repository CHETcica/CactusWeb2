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
        
        if($_POST){
            $First_name = $_POST['First_name'];
            $Last_name = $_POST['Last_name'];
            $house_no = $_POST['house_no'];
            $province = $_POST['province'];
            $district = $_POST['district'];
            $subdistrict = $_POST['subdistrict'];
            $Postal_code = $_POST['Postal_code'];
            

            $sqlu ="UPDATE `user` SET `First_name` = '$First_name',`Last_name` = '$Last_name' WHERE 'uid' ='$userid'";//อัพเดท ชื่อนามสกุล
            $stmtu = $conn->prepare($sqlu);
            $stmtu->execute();  

            $sqlua = " UPDATE `address` SET
            `province`= '$province',
            `district`='$district',
            `subdistrict`= '$subdistrict',
            `house_no`= '$house_no',
            `Postal_code`= '$Postal_code'
            WHERE uid = $userid";  
                                                                                    //อัพเดทที่อยู่ 'uid' = '1'
            $stmtua = $conn->prepare($sqlua);
            
            if($stmtua->execute()){
              //header("location:./Transport.php");
            } 
        }

        $sql ="SELECT First_name,Last_name FROM `user` WHERE `uid`= '$userid'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $rowuser = $stmt->fetch(PDO::FETCH_ASSOC);

        $fname =  $rowuser['First_name'];
        //$rowuser['Last_name'];
        if(!empty($fname)){
            
            $disabled = "disabled";
        }else{
            var_dump($rowuser['First_name']);
            $disabled = "disable";
        }


        
        $sql ="SELECT * FROM `address` WHERE `uid`= '$userid'";
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

              <div class="container  containerX my-10">
                <form action="" method="POST">
                    <div class="form-row">
                      <div class="col pt-2">
                        <label for="inputEmail4">First name</label>
                        <input <?php echo $disabled;?>  name="First_name" class="form-control" value="<?php echo $rowuser['First_name'];?>">
                      </div>
                      <div class="col pt-2">
                        <label for="inputEmail4">Last name</label>
                        <input <?php echo $disabled;?>  name="Last_name" class="form-control" value="<?php echo $rowuser['Last_name'];?>" >
                      </div>
                      
                    </div>
                    
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputhouse_no">house_no</label>
                          <input type="text" class="form-control" name="house_no" value="
                            <?php
                              if($row){
                                echo $row['house_no'];  
                              } 
                              else{
                                echo "";
                              }  
                            ?>
                          ">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputprovince">province</label>
                          <input type="text" class="form-control" name="province" value="
                          <?php
                            if($row){
                              echo $row['province'];  
                            } 
                            else{
                              echo "";
                            }  
                            
                          ?>">
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="inputdistrict">district</label>
                          <input type="text" class="form-control" name="district" value="
                          <?php 
                            if($row){
                              echo $row['district'];
                            } 
                            else{
                              echo "";
                            } 
                            
                          ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputsub-district">sub-district</label>
                          <input type="text" class="form-control" name="subdistrict" value="
                          <?php 
                            if($row){
                              echo $row['subdistrict'];
                            } 
                            else{
                              echo "";
                            }
                            
                          ?>">
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
                          <input type="text" class="form-control"name="Postal_code" value="
                          <?php
                            if($row){
                              echo $row['Postal_code'];
                            } 
                            else{
                              echo "";
                            } 
                            
                            ?>">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div> -->
                      <a href="./basket.php">
                        <button type="Cancel" class="btn btn-secondary">Cancel</button>
                      </a>
                      
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>

                


                <a href="./Transport.php" class="btn btn-primary my-2">Save and go to Transport</a>
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