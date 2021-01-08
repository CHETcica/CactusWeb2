<?php
    $Cac_id = $_GET["Cactusid"];
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
?>
<?php
     
     
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
//http://localhost/CastusV1.9/public/php/insertbasket.php?Cactusid=3&Customerid=1&CactusAmount=9

?>

