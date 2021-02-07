<?php
session_start();
$userid = $_SESSION['user_login'];
require('connect.php');
$sql = "SELECT * FROM user WHERE uid = $userid";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// $connadd = mysqli_connect("localhost","root","","cactus");
// $sqlx = "SELECT * FROM provinces";
// $resultx = mysqli_query($connadd, $sqlx);
$sqlx = "SELECT * FROM provinces";
$stmtx = $conn->prepare($sqlx);
$stmtx->execute();
$sqlx1 = "SELECT * FROM amphures";
$stmtx1 = $conn->prepare($sqlx1);
$stmtx1->execute();
$sqlx2 = "SELECT * FROM districts";
$stmtx2 = $conn->prepare($sqlx2);
$stmtx2->execute();

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

    <h1 class="profile-header">Edit Profile</h1>

  </div>
  <div class="container bg-profile" style="margin-top:50px;">
    <div class="row">
      <div class="col-lg-4">
        <img class="img-profile" src="<?php echo $row['uimg'] ?>" alt="">
        <div class="bg-img-profile"></div>

      </div>
      <div class="col-lg-8">

        <label for="" style="margin-top:50px; margin-left:40px;">uid </label>
        <input type="text" name="uid" style="width:300px; height:auto; margin-left:40px;">
        <br><br>
        <label for="" style="margin-left:40px;">uname </label>
        <input type="text" name="uname" style="width:300px; height:auto; margin-left:15px;">
        <br><br>
        <label for="" style="margin-left:40px;">email </label>
        <input type="text" name="email" style="width:300px; height:auto; margin-left:25px;">
        <br><br>
        <label for="" style="margin-left:40px;">phone </label>
        <input type="text" name="phone" style="width:300px; height:auto; margin-left:15px;">
        <!--dropdown-->
        <br><br>
        <!-- <label for="" style="margin-left:40px;">ที่อยุ่ :</label>
        <input class="search" type="search" placeholder="จังหวัด" aria-label="Search" style="width:100px; height:auto; margin-left:25px;"> -->
        <!-- <label for="" style="margin-left:40px;">ตำบล :</label>
              <input class="search" type="dropdown" placeholder="ตำบล" aria-label="Search"style="width:100px; height:auto; margin-left:20px;"> -->
        <br><label for="province">จังหวัด</label>
        <select name="province_id" id="province" class="form-control">
          <option value="">เลือกจังหวัด</option>
          <?php while ($rowx = $stmtx->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $rowx['id'] ?>">
              <?= $rowx['name_th'] ?>
            </option>
          <?php } ?>
        </select>
        <label for="amphure">อำเภอ</label>
        <select name="amphure_id" id="amphure" class="form-control">
          <option value="">เลือกอำเภอ</option>
          <?php while ($rowx1 = $stmtx1->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $rowx1['id'] ?>">
              <?= $rowx1['name_th'] ?>
            </option>
          <?php } ?>
        </select>
        <label for="district">ตำบล</label>
        <select name="district_id" id="district" class="form-control">
          <option value="">เลือกตำบล</option>
          <?php while ($rowx2 = $stmtx2->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $rowx2['id'] ?>">
              <?= $rowx2['name_th'] ?>
            </option>
          <?php } ?>
        </select>

        <!-- <div>
              <label for="" style="margin-left:40px;">อำเภอ :</label>
              <input class="search" type="search" placeholder="อำเภอ" aria-label="Search"style="width:100px; height:auto; margin-left:12px;">
              <label for="" style="margin-left:40px;">จังหวัด :</label>
              <input class="search" type="search" placeholder="จังหวัด" aria-label="Search"style="width:100px; height:auto; margin-left:15px;">
            </div> -->
        <!--<labrl for="id_user">ID : <div class="id_user_fromtable">0000<?php echo $row['uid'] ?></div></div>
              <hr>
              <div class="name_user">Name : <div class="name_user_fromtable"><?php echo $row['uname'] ?></div></div>
              
              <div class="name_user">Email : <div class="name_user_fromtable"><?php echo $row['email'] ?></div></div>
              <div class="name_user">Phone : <div class="name_user_fromtable"><?php echo $row['phone'] ?></div></div>
              <div class="name_user">Address : <div class="name_user_fromtable"><?php  ?></div></div>
              <button type="button" class="btn btn-outline-success btn-group-profile">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-group-profile">Close</button>
              <a  class="btn btn-outline-warning btn-group-profile" href="./php/logout.php">
                 Logout
              </a> -->
      </div>
    </div>
  </div>
  <!-- =====================================================   footer  ===================================================== -->
  <?php
  include "./component/footer.php";
  ?>
  <script src="./main.js"></script>
  <script src="assets/jquery.min.js"></script>
  <script src="assets/script.js"></script>
</body>

</html>