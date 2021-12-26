<?php 

    require './app.php';

    $query = "INSERT INTO `data_club` VALUES (null,'$_POST[club]')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/club/index.php?msg=success');
    }else{
        header('location:./../../page/club/index.php?msg=errors');
    } 