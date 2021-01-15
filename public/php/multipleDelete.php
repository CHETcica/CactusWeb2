<?php
    $id=$_POST['checkDelete'];
    print_r($id);//ปริ้นอาร์เรย์
    $multiple_id=implode(",",$id);//แปลงไอดีเป็นสตริง
    var_dump($multiple_id); //เช็คสถานะ

    require "../connect.php";
    $sql="DELETE FROM basket WHERE BasketID IN ($multiple_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt){
        header("location:../basket.php");
        
    } 
    else{
        echo "Error";
    }
?>
