<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');
    
    session_start();
    $movie_theater_name = $_POST['movie_theater_name'];
    $movie_theater_address = $_POST['movie_theater_address'];
    $id = $_POST['id'];
    $query = "UPDATE movie_theaters SET movie_theater_name='".$movie_theater_name."',movie_theater_address='".$movie_theater_address."' WHERE id=".$id;
    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewMovieTheater.php?msg=Updated successfully done!..');
    }else{
        header('location:viewMovieTheater.php?msg=Updation failed..');
    }