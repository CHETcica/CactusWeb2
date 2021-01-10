<?php
    session_start();
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
    var_dump($Cusid);


    


    $sql1 = "SELECT * FROM basket WHERE `uid` ='$Cusid' and Cac_id = '$Cac_id' ";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $basketId = $row1['BasketID'];

    var_dump($basketId);

     if(!empty($row1["BasketID"])){
        
        echo "updete";
       
        $sql = "UPDATE `basket` SET `Amout`='$CactusAmount',`Sumprice`='$Sum' WHERE `BasketID`= $basketId";
        $stmt1 = $conn->prepare($sql);
        // var_dump($Sum);
        // var_dump($CactusAmount);
        echo "<br>";

        $stmt1->bindParam(':Amount',$CactusAmount);
        $stmt1->bindParam(':Sumprice',$Sum);
        $stmt1->bindParam(':CusID',$_GET["Customerid"]);
        $stmt1->bindParam(':Cac_id',$Cac_id);
    
    
        
        $StatusBK='0';
        if ($stmt1->execute()):
            $message = '';
            header('location:../basket.php');
            exit(0);
            var_dump('update succses');
        else:
            $message='Error';
            
            
            
        endif;
        echo $message;
        $conn = null;
    
    
    
     }else if(empty($row1["BasketID"])){
        
        $sql="INSERT INTO `basket`(BasketID,Amout, Sumprice, StatusBK,`uid`,Cac_id) 
                            VALUES (' ', :Amount, :Sumprice, '0', :CusID, :Cac_id);";
        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(':Amount',$CactusAmount);
        $stmt->bindParam(':Sumprice',$Sum);
        $stmt->bindParam(':CusID',$_GET["Customerid"]);
        $stmt->bindParam(':Cac_id',$Cac_id);
    
        
        $StatusBK='0';
        if ($stmt->execute()):
            $message = 'yes';
            header("location:../basket.php");
            exit(0);
        else:
            $message='Error';
   
            
        endif;
        echo $message;
        $conn = null;
    
     }
?>