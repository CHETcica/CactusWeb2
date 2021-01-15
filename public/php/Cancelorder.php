<?php
    $orderid = $_GET['orderid'];
    require ('../connect.php');
    $sql ="DELETE FROM `order` WHERE orderid = $orderid";
    $stmt = $conn->prepare($sql);
 
    if($stmt->execute()){
        header("location:../basket.php");
        //public/php/Cancelorder.php?orderid=26
    }
?>