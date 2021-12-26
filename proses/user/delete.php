<?php 

    require './app.php';

    $id = $_GET['id_user'];
    $query = "DELETE FROM `data_user` WHERE id_user=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/user/index.php?msg=success');
    }else{
        header('location:./../../page/user/index.php?msg=errors');
    } 