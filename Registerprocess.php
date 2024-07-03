<?php
    require('db_config.php'); // require_once
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
   $query ="INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES ('$user_name', '$user_email ', '$user_password')";
    $result  = mysqli_query($connection,$query);
    if($result){
        session_start();
        $_SESSION['guest_user'] = $row;
        header('location:index.php');
    }else{
        header('location:register.php?msg=Sorry : Invalid Email/Password please try again!..');
    }
?>