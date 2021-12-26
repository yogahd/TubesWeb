<?php 

    require './app.php';

    $id = $_GET['id_kategori'];
    $query = "DELETE FROM `data_kategori` WHERE id_kategori=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/kategori/index.php?msg=success');
    }else{
        header('location:./../../page/kategori/index.php?msg=errors');
    } 