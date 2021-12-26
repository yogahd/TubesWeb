<?php 

    require './app.php';

    $id = $_GET['id_berita'];
    $query = "DELETE FROM `data_berita` WHERE id_berita=$id";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/berita/index.php?msg=success');
    }else{
        header('location:./../../page/berita/index.php?msg=errors');
    } 