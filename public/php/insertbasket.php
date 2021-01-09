<?php
    $Cac_id = $_GET["Cactusid"];
    $Cusid = $_GET["Customerid"];
    $CactusAmount = $_GET["CactusAmount"];
    

    require ('../connect.php');
    $sql = "SELECT * FROM product WHERE Cac_id ='$Cac_id'" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $Cactusprice = $row["Cac_Price"];
    $Sum = $Cactusprice * $CactusAmount;

    var_dump($Cac_id);
    var_dump($CactusAmount);
    var_dump($_GET["Customerid"]);


    

    require ('../connect.php');
    $sql1 = "SELECT * FROM basket WHERE CusID ='$Cusid' and Cac_id = '$Cac_id' " ;
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $basketId = $row1['BasketID'];
     if(!empty($row1["BasketID"])){
        require '../connect.php';
        $sql="UPDATE `basket` SET `Amout`=:Amount,`Sumprice`=:Sumprice WHERE `BasketID`= $basketId";
        $stmt = $conn->prepare($sql);
    
        $stmt1->bindParam(':Amount',$CactusAmount);
        $stmt1->bindParam(':Sumprice',$Sum);
        $stmt1->bindParam(':CusID',$_GET["Customerid"]);
        $stmt1->bindParam(':Cac_id',$Cac_id);
    
        var_dump($sql);
        
        $StatusBK='0';
        if ($stmt1->execute()):
            $message = 'yes';
            header("location:../basket.php");
            exit(0);
        else:
            $message='Error';
            echo $sql."<br>";
            echo $CactusAmount."<br>";
            echo $Sum."<br>";
            echo $StatusBK."<br>";
            echo $_GET["Customerid"]."<br>";
            echo $Cac_id."<br>";
            
            
        endif;
        echo $message;
        $conn = null;
    
    
    
     }
     else if(empty($row1["BasketID"])){
        require '../connect.php';
        $sql="INSERT INTO `basket`(BasketID,Amout, Sumprice, StatusBK,CusID,Cac_id) 
                            VALUES (' ', :Amount, :Sumprice, '0', :CusID, :Cac_id);";
        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(':Amount',$CactusAmount);
        $stmt->bindParam(':Sumprice',$Sum);
        $stmt->bindParam(':CusID',$_GET["Customerid"]);
        $stmt->bindParam(':Cac_id',$Cac_id);
    
        var_dump($sql);
        
        $StatusBK='0';
        if ($stmt->execute()):
            $message = 'yes';
            header("location:../basket.php");
            exit(0);
        else:
            $message='Error';
            echo $sql."<br>";
            echo $CactusAmount."<br>";
            echo $Sum."<br>";
            echo $StatusBK."<br>";
            echo $_GET["Customerid"]."<br>";
            echo $Cac_id."<br>";
            
            
        endif;
        echo $message;
        $conn = null;
    
    
    
    
     }
?>