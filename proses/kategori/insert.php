<?php 

    require './app.php';

    $query = "INSERT INTO `data_kategori` VALUES (null,'$_POST[kategori]')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/kategori/index.php?msg=success');
    }else{
        header('location:./../../page/kategori/index.php?msg=errors');
    } 