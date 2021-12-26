<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  
  <h1>Berita Update</h1>
  <?php $query = "select * from data_berita db inner join data_club dc on dc.id_club = db.id_klub inner join data_asal da on da.id_asal = db.id_asal inner join data_kategori dk on dk.id_kategori = db.id_kategori inner join data_user du on du.id_user = db.id_user"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
 
  

  <div class="row">

    <?php foreach($sql as $row): ?>
      <div class="col-md-6">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" style="width: 100%" src="./../../proses/berita/uploads/<?= $row['gambar'] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= $row['judul'] ?></h5>
            <p class="card-text"><?= $row['isi'] ?></p>
            <a href="<?= $row['sc'] ?>" class="btn btn-primary">More . . .</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>
  
  
  <?php include './../../layouts/footer.php'; ?>
