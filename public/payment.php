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
    require('connect.php');
    $uid = $_SESSION['user_login'];
    $sql = "SELECT * FROM `order` WHERE `statusorder`= 'no' AND `uid` = $uid";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //$Bid_arr = explode(",",$row['BasketID']);
    //var_dump($Bid_arr);
    
    //var_dump($row['BasketID']);
    $multiBid = $row['BasketID'];


    //echo $row['totalprice'];
    $sql_1 = "SELECT * FROM `basket` WHERE `BasketID` in ($multiBid)";
    $stmt_1 = $conn->prepare($sql_1);
    $stmt_1->execute();
    $List = 1;

    ?>
    <div class="container">
        
        
   
        

    </div>
    
    <section class="container pt-5">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2>
                    Your Order
                </h2>
            <div class="card card-con-order mb-5">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th > 
                            List
                        </th>
                        <th>
                            Name Cactus
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Price
                        </th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    while ($row_1 = $stmt_1->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        
                        <tr>
                                <th>
                                    <?php echo $List; ?>
                                </th>
                                <td>
                                    <?php
                                    $cactusid = $row_1['Cac_id'];
                                    $sql_2 = "SELECT * FROM `product` WHERE Cac_id = $cactusid";
                                    $stmt_2 = $conn->prepare($sql_2);
                                    $stmt_2->execute();
                                    $row_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);
                                    echo $row_2['Cac_name'];
                                    ?>
                                </td>
                                <td>
                                <?php echo $row_1['Amout']; ?>
                                </td>
                                <td>
                                <?php echo $row_1['Sumprice']; ?>
                                </td>
                        </tr>      
                    <?php
                        $List += 1;
                    }
                    ?>
                    </tbody> 
                </table>
            </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h6>Suptotal</h6>
                    </div>
                    <div class="col ">
                        <h6 class="text-align-right pr-2"><?php echo $row['totalprice']; ?>฿</h6>
                    </div>
                </div>    
                <hr>
                <div class="row">
                    <div class="col">
                        <h6>Shipping</h6>
                    </div>
                    <div class="col ">
                        <h6 class="text-align-right pr-2">35฿</h6>
                    </div>
                </div>
                <hr>
                <div class="card">

                    
                    <div class="form-check form-check-bank"data-toggle="modal" data-target="#Slibe">
                      <input class="form-check-input" type="radio" name="pay" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Use Mobilebanking

                      </label>
                    </div>
                      <!-- Vertically centered scrollable modal -->
                      <div class="modal" id="Slibe" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Attach a receipt</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <input type="file">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Payment_completed">
                                Save changes
                              </button>
                              

                                <!-- horizontal centered scrollable modal -->
                                  <div class="modal" id="Payment_completed" tabindex="-1">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Payment completed</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <img style="width: auto; height: 450px;" src="./pictures/./FAVPNG_check-mark-transparency_448se54Q.png" alt="">
                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary"><a href="./php/updateorder.php?orderid=<?php  echo $row['orderid'];?>">Go to Transportation</a></button>
                                        </div>
                                      </div>
                                    </div> 
                                  </div>
                            </div>
                          </div>
                        </div> 
                      </div>
                    
                      <div class="form-check form-check-bank">
                        <input class="form-check-input" type="radio" name="pay" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios1">
                          Payment on destination
                        </label>
                      </div>    
                    <div class="form-check form-check-bank">
                      <input class="form-check-input" type="radio" name="pay" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios1">
                        Pay by credit card
                        <img src="./pictures/credit.png" alt="">
                      </label>
                    </div>

                    <a class="btn btn-secondary btn-secondary-cancel-payment" href="./php/Cancelorder.php?orderid=<?php  echo $row['orderid'];?>" >Cancel</a>
 
                    <button type="button" class="btn btn-primary btn-bottom ml-3" data-toggle="modal" data-target="#Payment_completed1">
                      submit
                    </button>
                    <!-- horizontal centered scrollable modal -->
                    <div class="modal" id="Payment_completed1" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Payment completed</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img style="width: auto; height: 450px;" src="./pictures/./FAVPNG_check-mark-transparency_448se54Q.png" alt="">
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"><a href="./php/updateorder.php?orderid=<?php  echo $row['orderid'];?>">Go to Transportation</a></button>
                          </div>
                        </div>
                      </div> 
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