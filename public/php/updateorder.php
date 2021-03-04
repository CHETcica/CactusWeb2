<?php
    session_start();
    $orderid = $_GET['orderid'];
    require ('../connect.php');
    $uid = $_SESSION['user_login'];
    $sql = "SELECT * FROM `order` WHERE orderid = $orderid AND `uid` = $uid";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $multiBid = $row['BasketID'];

    $sql ="UPDATE `order` SET `statusorder`='yes' WHERE orderid = $orderid";
    $stmt = $conn->prepare($sql);

    
    
    $sql1 ="UPDATE `basket` SET `StatusBK`='yes' WHERE `BasketID` in ($multiBid)";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();

    $sql2 ="SELECT * FROM `basket` WHERE `BasketID` in ($multiBid)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
   
    while($basketupdate = $stmt2->fetch(PDO::FETCH_ASSOC)){
        $cactusid = $basketupdate['Cac_id'];
        $amoutcactus = $basketupdate['Amout'];


        $cactustaget ="SELECT * FROM `product` WHERE `Cac_id`= $cactusid ";
        $taget = $conn->prepare($cactustaget);
        $taget->execute();
        $cactus = $taget->fetch(PDO::FETCH_ASSOC);
        
        $Cac_Existing = $cactus['Cac_Existing'];

        $balance = ($Cac_Existing - $amoutcactus);


        $Updateproduct ="UPDATE `product` SET `Cac_Existing`= $balance WHERE `Cac_id` = $cactusid";
        $stmtUpdateproduct = $conn->prepare($Updateproduct);
        $stmtUpdateproduct->execute();

    }

    if($stmt->execute()){
        header("location:../manageaddress.php");

    }





?>