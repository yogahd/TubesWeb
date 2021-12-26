<?php 

    require './app.php';

    $query = "UPDATE `data_user` SET `nama`='$_POST[nama]',`telp`='$_POST[telp]',`username`='$_POST[username]',`password`=md5('$_POST[password]') WHERE id_user=$_GET[id_user]";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/user/index.php?msg=success');
    }else{
        header('location:./../../page/user/index.php?msg=errors');
    } 