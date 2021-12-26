<?php 

    require './app.php';

    $query = "UPDATE `data_asal` SET `asal`='$_POST[asal]' WHERE id_asal=$_GET[id_asal]";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/asal/index.php?msg=success');
    }else{
        header('location:./../../page/asal/index.php?msg=errors');
    } 