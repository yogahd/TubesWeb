<?php 

    require './app.php';

    $id = $_GET['id_asal'];
    $query = "DELETE FROM `data_asal` WHERE id_asal=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/asal/index.php?msg=success');
    }else{
        header('location:./../../page/asal/index.php?msg=errors');
    } 