<?php
    require('db_config.php'); // require_once
    date_default_timezone_set('Asia/Karachi');
    
    session_start();
    $movie_name = $_POST['movie_name'];
    $movie_trailer = $_POST['movie_trailer'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $poster = $_POST ['poster'];
    $added_by = $_SESSION['user']['id'];
    $created_at = date('Y-m-d h:i:s');
    $id = $_POST['id'];
    $query = "UPDATE movies SET movie_name='".$movie_name."',movie_trailer='".$movie_trailer."',description='".$description."',release_date ='".$release_date."',poster ='".$poster."',added_by='".$added_by."',created_at='".$created_at."'  WHERE id=".$id;
    
    $result  = mysqli_query($connection,$query);
    if($result){
        header('location:viewMovies.php?msg=Updated successfully done!..');
    }else{
        header('location:viewMovies.php?msg=Updation failed..');
    }