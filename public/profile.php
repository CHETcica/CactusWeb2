<?php
    
    require ('connect.php');
    $sql = "SELECT * FROM customer WHERE CusID ='3'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    
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
              <img class="img-profile" src="<?php echo $row['Imgprofile'] ?>" alt="">
              <div class="bg-img-profile"></div>
              
            </div>
            <div class="col-lg-8 col-12">
              <div class="id_user">ID : <div class="id_user_fromtable">0000<?php echo $row['CusID'] ?></div></div>
              <hr>
              <div class="name_user">Name : <div class="name_user_fromtable"><?php echo $row['Name'] ?></div></div>
              <div class="name_user">Lastname : <div class="name_user_fromtable"><?php echo $row['Lastname'] ?></div></div>
              <div class="name_user">Email : <div class="name_user_fromtable"><?php echo $row['Email'] ?></div></div>
              <div class="name_user">Phone : <div class="name_user_fromtable"><?php echo $row['Phone'] ?></div></div>
              <div class="name_user">Address : <div class="name_user_fromtable"><?php echo $row['Address'] ?></div></div>
              <button type="button" class="btn btn-outline-success btn-group-profile">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-group-profile">Close</button>
              <a href="index.html">
                  <button type="button" class="btn btn-outline-warning btn-group-profile">Logout</button>
              </a>
            </div>
          </div>   
    </div>
    <!-- =====================================================   footer  ===================================================== -->
    <?php
        include "./component/footer.php";
    ?>
  <script src="./main.js"></script>
    
  </body>
  </html>
