<?php
    session_start();
    require ('../connect.php');
    $uid = $_SESSION['user_login'];
    //$sql = "SELECT * FROM `basket` WHERE `uid`= $uid";
    $sql = "SELECT SUM(`Sumprice`) as total, GROUP_CONCAT(`BasketID` SEPARATOR ',') as BasketID FROM `basket` WHERE `uid` = $uid AND StatusBK = 'no'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalprice = $row['total'];
    $BasketID = $row['BasketID'];
    var_dump($totalprice);
    var_dump($BasketID);
    var_dump($uid);

    $sql_1 = "INSERT INTO `order`(`statusorder`, `BasketID`,`datetime`, `uid`, `totalprice`) 
                            VALUES('no','$BasketID','',$uid,$totalprice)";
    $stmt_1 = $conn->prepare($sql_1);
    
    if($stmt_1->execute()){
        header("location:../payment.php");
        echo "yes";
    }
    else{
        echo "no";

    }






?>