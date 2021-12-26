<?php
    error_reporting(0);

    $conn = mysqli_connect('localhost', 'root', '','berita_sepakbola');

    if($conn){
        // echo "berhasil";
    }else{
        echo "gagal";
    }