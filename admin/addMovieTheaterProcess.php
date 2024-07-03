<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');
    
    session_start();
    $movie_theater_name = $_POST['movie_theater_name'];
    $movie_theater_address = $_POST['movie_theater_address'];
    $cast = $_POST['movie_cast'];
    $added_by = $_SESSION['user']['id'];
    $created_at = date('Y-m-d h:i:s');

    $query = "INSERT INTO movie_theaters (movie_theater_name,movie_theater_address,added_by,created_at) VALUES ('".$movie_theater_name."','".$movie_theater_address."','".$added_by."','".$cast."','".$created_at."')";

    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewMovieTheater.php?msg=Added successfully done!..');
    }else{
        header('location:addMovieTheater.php?msg=Added failed..');
    }