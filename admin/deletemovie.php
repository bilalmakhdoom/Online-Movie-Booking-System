<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');
    session_start();
    $id = $_GET['id'];
    $query = "DELETE FROM `movies` WHERE id=".$id;
    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewMovies.php?msg=Delted successfully done!..');
    }else{
        header('location:viewMovies.php?msg=Deletion failed..');
    }