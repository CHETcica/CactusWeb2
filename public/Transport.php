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
    <!---flude========================================container-fluid================================================== -->
    <?php
        include "./component/navbar.php";
        $uid = $_SESSION['user_login'];
        require('connect.php');
        $sql = "SELECT * FROM `order` WHERE `uid`= $uid";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $list = 1;
    ?>
        <div class="container ">
            <div>
                <h1>
                    Transport
                </h1>
            </div>
            <div class="card my-5" style="height: 100%;">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th > 
                            List
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Product
                        </th>
                        <th>
                            Address
                        </th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        
                        <tr>
                                <th>
                                   <?php 
                                    echo $list;
                                    //echo $row['orderid'];
                                   ?>   
                                </th>
                                <td>
                                    <?php echo $row['datetime'];?>
                                </td>
                                <td>
                                  <?php  
                                   $multiBid = $row['BasketID'];
                                   
                                   $sql_2 = "SELECT * FROM `basket` WHERE BasketID in ($multiBid)";
                                   $stmt_2 = $conn->prepare($sql_2);
                                   $stmt_2->execute();
                                    while($row_2 = $stmt_2->fetch(PDO::FETCH_ASSOC)){
                                        $cactusid = $row_2['Cac_id'];
                                        $sql_3 = "SELECT * FROM `product` WHERE Cac_id = $cactusid";
                                        $stmt_3 = $conn->prepare($sql_3);
                                        $stmt_3->execute();
                                        $row_3 = $stmt_3->fetch(PDO::FETCH_ASSOC);
                                            echo $row_3['Cac_name']; 
                                        
                                   }                 

                                   
                                  ?>
                                </td>
                                <td>
                                  <?php  
                                    $sql_4 ="SELECT * FROM `address` WHERE `uid`= '$userid'";
                                    $stmt_4 = $conn->prepare($sql_4);
                                    $stmt_4->execute();
                                    $row_4 = $stmt_4->fetch(PDO::FETCH_ASSOC);
                                    echo $row_4['house_no'];
                                    echo $row_4['subdistrict'];
                                    echo $row_4['district'];
                                    echo $row_4['province'];
                                    echo $row_4['Postal_code'];
                                  ?>
                                </td>
                        </tr>  
                        
                        
                    <?php
                        $list += 1;
                    }
                    ?>
                    </tbody> 
                </table>
            </div>

        </div>   
    <!-- =====================================================footer===================================================== -->
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