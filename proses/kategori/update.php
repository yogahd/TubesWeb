<?php 

    require './app.php';

    $query = "UPDATE `data_kategori` SET `kategori`='$_POST[kategori]' WHERE id_kategori=$_GET[id_kategori]";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/kategori/index.php?msg=success');
    }else{
        header('location:./../../page/kategori/index.php?msg=errors');
    } 