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


    if($stmt->execute()){
        header("location:../manageaddress.php");

    }





?>