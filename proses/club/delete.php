<?php 

    require './app.php';

    $id = $_GET['id_club'];
    $query = "DELETE FROM `data_club` WHERE id_club=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/club/index.php?msg=success');
    }else{
        header('location:./../../page/club/index.php?msg=errors');
    } 