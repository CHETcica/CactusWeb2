<?php
    $id=$_POST['checkDelete'];
    print_r($id);//ปริ้นอาร์เรย์
    $multiple_id=implode(",",$id);//แปลงไอดีเป็นสตริง
    var_dump($multiple_id); //เช็คสถานะ

    require ('../connect.php');
    $sql="DELETE FROM basket WHERE BasketID IN ($multiple_id)";
    $result= mysqli_query($connect,$sql);

    if($result){
        header("location:../basket.php.php");
        exit(0);
    } 
    else{
        echo "Error";
    }
?>
