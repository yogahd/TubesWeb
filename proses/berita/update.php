<?php 

    require './app.php';

    $files = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "./uploads/".$files);
    $query = "UPDATE `data_berita` SET `judul`='$_POST[judul]',`isi`='$_POST[isi]',`sc`='$_POST[sc]',`gambar`='$files' WHERE id_berita=$_GET[id_berita]";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header('location:./../../page/berita/index.php?msg=success');
    }else{
        header('location:./../../page/berita/index.php?msg=errors');
    } 

    