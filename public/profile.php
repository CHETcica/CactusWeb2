<?php
    session_start();
    $userid = $_SESSION['user_login'];
    require ('connect.php');
    //$sql = "SELECT * FROM user WHERE uid = $userid" ;
    $sql = "SELECT * FROM `user` INNER JOIN phone INNER JOIN address 
    WHERE user.uid = phone.uid AND user.uid = address.uid" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // $sql_2 = "SELECT * FROM phone WHERE uid = $userid" ;
    // $stmt_2 = $conn->prepare($sql_2);
    // $stmt_2->execute();
    // $row_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);
    
    // $sql_3 = "SELECT * FROM phone WHERE uid = $userid" ;
    // $stmt_3 = $conn->prepare($sql_3);
    // $stmt_3->execute();
    // $row_3 = $stmt_3->fetch(PDO::FETCH_ASSOC);
?>

<?php
        include "./component/head.php";
?>
  
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
              <div class="id_user">ID : <div class="id_user_fromtable">0000<?php echo $row['uid'] ?></div></div>
              <hr>
              <div class="name_user">Name : <div class="name_user_fromtable"><?php echo $row['uname'] ?></div></div>
              <div class="name_user">Email : <div class="name_user_fromtable"><?php echo $row['email'] ?></div></div>
              <div class="name_user">Phone : <div class="name_user_fromtable"><?php echo $row['phonenumber'] ?></div></div>
              <div class="name_user">Address : <div class="name_user_fromtable"><?php echo $row['house_no'];$row['province'];$row['district'];$row['sub-district']; ?></div></div>
              <button type="button" class="btn btn-outline-success btn-group-profile">Edit</button>
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
