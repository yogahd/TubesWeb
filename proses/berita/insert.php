<?php 

    require './app.php';

    $files = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "./uploads/".$files);
    $query = "INSERT INTO `data_berita` VALUES (null,'$_POST[id_klub]','$_POST[id_asal]','$_POST[id_kategori]','$_POST[id_user]','$_POST[judul]', '$_POST[isi]','$_POST[sc]', '$files')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/berita/index.php?msg=success');
    }else{
        header('location:./../../page/berita/index.php?msg=errors');
    } 