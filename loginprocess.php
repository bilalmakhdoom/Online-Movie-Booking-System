<?php
    require('db_config.php'); // require_once
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
   $query ="SELECT id,user_email,user_name FROM users WHERE user_email='".$user_email."' AND user_password='".$user_password."'";
    $result  = mysqli_query($connection,$query);
    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['guest_user'] = $row;
        header('location:index.php');
    }else{
        header('location:login.php?msg=Sorry : Invalid Email/Password please try again!..');
    }
?>