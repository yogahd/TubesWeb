<?php require './../../db/koneksi.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GOALS. | Berita Sepak Bola Ter Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">GOALS.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="./../home">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if($_SESSION['id']): ?>
          <li class="nav-item">
            <a class="nav-link" href="./../user">User</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./../berita">Berita</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./../club">Club</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./../asal">Asal</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="./../kategori">Kategori</a>
          </li>
         
        <?php endif ?>
        
      </ul>
        <div class="form-inline my-2 my-lg-0">
          
          <?php if($_SESSION['id']): ?>
            <a class="btn btn-outline-success my-2 my-sm-0" href="./../login/logout.php">Logout</a>
          <?php else: ?>
            <a class="btn btn-outline-success my-2 my-sm-0" href="./../login">Login</a>
          <?php endif ?>
        </div>
    </div>
  </nav>

  <div class="container">
    