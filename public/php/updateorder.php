<?php
    $orderid = $_GET['orderid'];
    require ('../connect.php');
    $sql ="UPDATE `order` SET `statusorder`='yes' WHERE orderid = $orderid";
    $stmt = $conn->prepare($sql);
    

    if($stmt->execute()){
        header("location:../payment.php");

    }





?>