<?php
    session_start(); 
    require '../connect.php';
    

    if(isset($_REQUEST['btn_register'])){
        $username = strip_tags($_REQUEST['username']);
        $email = strip_tags($_REQUEST['email']);
        $password = strip_tags($_REQUEST['password']);
        $password_confirm = strip_tags($_REQUEST['password_confirm']);

        if(empty($username)){
            $errorMsg[] = "Please enter username.";
           
        }
        else if(empty($email)){
            $errorMsg[] = "Please enter email.";
        }
        else if(empty(!filter_var($email,FILTER_VALIDATE_EMAIL))){
            $errorMsg[] = "Please enter a valid email address.";
        }
        else if(empty($password)){
            $errorMsg[] = "Please enter password.";
        }
        else if(strlen($password) < 6){
            $errorMsg[] = "Password must be atleast 6 characters.";
        }
        else{
            try{
                $select_stmt = $conn->prepare("SELECT `Name`,`Email` FROM `customer` WHERE `Name`= '$username' OR Email = '$email' ");
                $select_stmt->execute(array(':NAMES'=>$username,':EMAIL'=>$email));
                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
                if($row['Name']== $username){
                    $errorMsg[] = "Sorry username already exists.";
                }
                else if($row['Email']){
                    $errorMsg[] = "Sorry email already exists.";

                }
                else if(!isset($errorMsg))
                    $new_password =password_hash($password,PASSWORD_DEFAULT);
                    $insert_stmt = $conn->prepare("INSERT INTO `customer`(`Name`, `Lastname`, `Imgprofile`, `Email`, `Password`, `Phone`, `Address`) 
                                                                    VALUES (:NAMES,:LASTNAME,:IMGPROFILE,:EMAIL,:PASSWORD,:PHONE,:ADDRESSs)");
                    if($insert_stmt->execute(array(
                        ':NAMES'=> $username,
                        ':LASTNAME' => $_POST['lastname'],
                        ':IMGPROFILE' =>  $_POST['Imgprofile'],
                        ':EMAIL' => $email,
                        ':PASSWORD' => md5($password),
                        ':PHONE' => $_POST['Phone_number'],
                        ':ADDRESSs' => $_POST['Address'],

                    ))){
                        $registerMsg = "Register successfully ...";
                    }

            }
            catch(PDOException $e){
                echo $e->getMessage();
            } 
        }
   
    }

    
    // require '../connect.php';
    // $sql = "INSERT INTO `customer`(`Name`, `Lastname`, `Imgprofile`, `Email`, `Password`, `Phone`, `Address`) 
    // VALUES (:NAMES,:LASTNAME,:IMGPROFILE,:EMAIL,:PASSWORDS,:PHONE,:ADDRESSs)";
    // $stmt = $conn->prepare($sql);
    
    // $stmt->bindParam(':NAMES', $_POST['username']);
    // $stmt->bindParam(':LASTNAME', $_POST['lastname']);
    // $stmt->bindParam(':IMGPROFILE', $_POST['Imgprofile']);
	//   $stmt->bindParam(':EMAIL', $_POST['email']);
    // $stmt->bindParam(':PASSWORDS', $_POST['password_confirm']);
    //$stmt->bindParam(':PHONE', $_POST['Phone_number']);
	//   $stmt->bindParam(':ADDRESSs', $_POST['Address']);
	

	

    // if ($stmt->execute()):
    //     $message = 'yes';
    //     header('location:indexAfter.html');
    //     exit(0);
    // else:
    //     $message = 'no';
    //     echo $_POST['username']."<br>";
    //     echo $_POST['lastname']."<br>";
    //     echo $_POST['Imgprofile']."<br>";
    //     echo $_POST['email']."<br>";
    //     echo $_POST['password_confirm']."<br>";
    //     echo $_POST['Phone_number']."<br>";
    //     echo $_POST['Address']."<br>";
    // endif;
    // echo $message;
    // $conn = null; 
?>