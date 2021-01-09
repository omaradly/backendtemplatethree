<?php 
session_start();
include 'openconnection.php';
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $user_name_error = "you must enter username";
    }
    if(empty($_POST['password'])){
        $password_error = "you must enter password";
    }elseif(strlen($_POST['password']) <= 6 ){
        $password_error = "you need password more strong";
    }
  
    if(!isset($user_name_error) && !isset($password_error)){
            $user_name = trim(htmlspecialchars($_POST['name']));
            $password = trim(htmlspecialchars($_POST['password']));
            $checkdatabaseusername = "select * from user where name = '$user_name'";
            $resultCheck = mysqli_query($con,$checkdatabaseusername);
            if(mysqli_num_rows($resultCheck)>0){
                $_SESSION['user_name_error'] = "Sorry, that username already exists!";
                header('location: signup.php');
            }else{
                $insert_data = "INSERT INTO user (name,password) values('$user_name','$password')";
                $signupcheck = mysqli_query($con,$insert_data);
                if($signupcheck){
                    $_SESSION['user_name'] = $user_name;
                    header('location: home.php');
                }else{
                    echo mysqli_error($con);
                }
            }
    }else{
        if(isset($password_error)){
            $_SESSION['password_error'] = $password_error;
        }
        if(isset($user_name_error)){
            $_SESSION['user_name_error'] = $user_name_error;
        }
        header('location: signup.php');
    }
    
     
}else{
    header('location: signin.php');
}




?>
