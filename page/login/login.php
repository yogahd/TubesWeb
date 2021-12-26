<?php 

    session_start();
	require './../../db/koneksi.php';
	$username=$_POST["username"];
	$password=md5($_POST["password"]);

	$query = " SELECT * FROM data_user WHERE username='$username' && password='$password'";
	$result = mysqli_query($conn, $query);
	$check = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

	if ($check>0) {
        $_SESSION['id'] = $row['id_user'];
        $_SESSION['username'] = $row['username'];
		header('location:./../home');
	}
	else{
		header("Location:index.php?error=failed");
	}
?>