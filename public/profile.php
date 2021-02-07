<?php
    session_start();
    require ('connect.php');
    $userid = $_SESSION['user_login'];
    $sql = "SELECT user.uid,
    user.uname,
    user.email,
    user.uimg,
    phone.phonenumber,
    address.province,
    address.district,
    address.subdistrict,
    address.house_no,
    address.Postal_code
    FROM `user` 
    INNER JOIN phone 
    INNER JOIN address 
    WHERE user.uid = phone.uid AND user.uid = address.uid AND user.uid = '$userid'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cactus</title>

    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- update the version number as needed -->

    
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <script src="./main.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
  
  <body>
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
        
        
        
        
    ?>
    <div>
                  
      <h1 class="profile-header">Profile</h1>
      
    </div>
     <div class="container bg-profile">
          <div class="row">
            <div class="col-lg-4 col- 12 ">
              <img class="img-profile" src="<?php echo $row['uimg'] ?>" alt="">
              <div class="bg-img-profile"></div>
              
            </div>
            <div class="col-lg-8 col-12">
              <div class="id_user">ID : 
                <div class="id_user_fromtable">0000<?php echo $row['uid'] ?>
                </div>
              </div>
              <hr>
              <div class="name_user">Name : 
                <div class="name_user_fromtable">
                  <?php echo $row['uname']; ?>
                </div>
              </div>
              <div class="name_user">Email : 
                <div class="name_user_fromtable">
                  <?php echo $row['email']; ?>
                </div>
              </div>
              <div class="name_user">Phone : 
                <div class="name_user_fromtable">
                  <?php
                    $sql ="SELECT * FROM `phone` WHERE `uid`='$userid'"; 
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    if($row){
                      echo 0;
                      echo $row['phonenumber']; 
                    }
                    else{
                      echo "Nall";
                    }
                    

                  ?>
                </div>
              </div>
              <div class="name_user">Address : 
                <div class="name_user_fromtable">
                    <?php 
                      $sql ="SELECT * FROM `address` WHERE `uid`='$userid'"; 
                      $stmt = $conn->prepare($sql);
                      $stmt->execute();
                      $row = $stmt->fetch(PDO::FETCH_ASSOC);
                      if($row){
                        echo $row['house_no']." ";
                        echo $row['province']." ";
                        echo $row['district']." ";
                        echo $row['subdistrict']." "; 
                        echo $row['Postal_code']." "; 
                      }
                      else{
                        echo "Nall";
                      }
                    ?>
                </div>
              </div>
              <a href="./editFormaddress.php" type="button" class="btn btn-outline-success btn-group-profile">Edit</a>
              <button type="button" class="btn btn-outline-danger btn-group-profile">Close</button>
              <a  class="btn btn-outline-warning btn-group-profile" href="./php/logout.php">
                 Logout
              </a>
            </div>
          </div>   
    </div>
    <!-- =====================================================   footer  ===================================================== -->
    <?php
        include "./component/footer.php";
    ?>
  <script src="./main.js"></script>
  <script>

  </script>  
  </body>
  </html>
