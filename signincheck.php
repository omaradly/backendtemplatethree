<?php 
session_start();
include 'openconnection.php';
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $user_name_error = "you must enter username";
    }
    if(empty($_POST['password'])){
        $password_error = "you must enter password";
    }
  
    if(!isset($user_name_error) && !isset($password_error)){
            $user_name = trim(htmlspecialchars($_POST['name']));
            $password = trim(htmlspecialchars($_POST['password']));
            $checkdatabaseusername = "select * from user where name = '$user_name'";
            $resultCheck = mysqli_query($con,$checkdatabaseusername);
            if(mysqli_num_rows($resultCheck)>0){
                $row = mysqli_fetch_assoc($resultCheck);
               if($password == $row['password']){
                $_SESSION['user_name'] = $user_name;
                header('location: home.php');
               }else{
                $_SESSION['password_error'] = "Wrong Password";
                header('location: signin.php');  
               }
            }else{
                $_SESSION['user_name_error'] = "sorry this account doesn't exist";
                header('location: signin.php');
                }
    }else{
        if(isset($password_error)){
            $_SESSION['password_error'] = $password_error;
        }
        if(isset($user_name_error)){
            $_SESSION['user_name_error'] = $user_name_error;
        }
        header('location: signin.php');
    }
    
     
}else{
    header('location: signin.php');
}




?>
