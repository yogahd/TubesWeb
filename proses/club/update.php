<?php 

    require './app.php';

    $query = "UPDATE `data_club` SET `club`='$_POST[club]' WHERE id_club=$_GET[id_club]";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/club/index.php?msg=success');
    }else{
        header('location:./../../page/club/index.php?msg=errors');
    } 