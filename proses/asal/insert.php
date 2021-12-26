<?php 

    require './app.php';

    $query = "INSERT INTO `data_asal` VALUES (null,'$_POST[asal]')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/asal/index.php?msg=success');
    }else{
        header('location:./../../page/asal/index.php?msg=errors');
    } 