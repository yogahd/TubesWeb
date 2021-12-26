<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Edit Data</h3>

  <?php $id = $_GET['id_berita']; ?>
  <?php $query = "select * from data_berita where id_berita=$id"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <form method="POST" action="./../../proses/berita/update.php?id_berita=<?= $row['id_berita'] ?>" enctype="multipart/form-data">
      
      <div class="form-group">
        <label for="">Judul</label>
        <input type="text" class="form-control" value="<?= $row['id_berita'] ?>" name="judul" id="" placeholder="Enter Judul">
      </div>

      <div class="form-group">
        <label for="">Isi</label>
        <input type="text" class="form-control" value="<?= $row['id_berita'] ?>" name="isi" id="" placeholder="Enter Isi">
      </div>

      <div class="form-group">
        <label for="">Source</label>
        <input type="text" class="form-control" value="<?= $row['id_berita'] ?>" name="sc" id="" placeholder="Enter Source">
      </div>

      <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" class="form-control" value="<?= $row['id_berita'] ?>" name="gambar" id="" placeholder="Enter Gambar">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php endforeach ?>
<?php include './../../layouts/footer.php'; ?>
