<?php 

    require './app.php';

    $query = "INSERT INTO `data_user` VALUES (null,'$_POST[nama]','$_POST[telp]','$_POST[username]', md5('$_POST[password]'))";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/user/index.php?msg=success');
    }else{
        header('location:./../../page/user/index.php?msg=errors');
    } 