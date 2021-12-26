<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Input Data</h3>
  <form method="POST" action="./../../proses/berita/insert.php" enctype="multipart/form-data">
  
  <div class="form-group">
      <label for="">Club</label>
      <?php $query = "select * from data_club"; ?>
      <?php $sql = mysqli_query($conn, $query); ?>
      <select name="id_klub" class="form-control">
        <?php foreach($sql as $key): ?>
          <option value="<?= $key['id_club'] ?>"><?= $key['club'] ?></option>
        <?php endforeach ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Asal</label>
      <?php $query = "select * from data_asal"; ?>
      <?php $sql = mysqli_query($conn, $query); ?>
      <select name="id_asal" class="form-control">
        <?php foreach($sql as $key): ?>
          <option value="<?= $key['id_asal'] ?>"><?= $key['asal'] ?></option>
        <?php endforeach ?>
      </select>
    </div>

  <div class="form-group">
      <label for="">Kategori</label>
      <?php $query = "select * from data_kategori"; ?>
      <?php $sql = mysqli_query($conn, $query); ?>
      <select name="id_kategori" class="form-control">
        <?php foreach($sql as $key): ?>
          <option value="<?= $key['id_kategori'] ?>"><?= $key['kategori'] ?></option>
        <?php endforeach ?>
      </select>
    </div>

  <div class="form-group">
      <label for="">User</label>
      <input type="text" class="form-control" name="id_user" id="" placeholder="Enter Judul" readonly value="<?= $_SESSION['id'] ?>">
    </div>

    <div class="form-group">
      <label for="">Judul</label>
      <input type="text" class="form-control" name="judul" id="" placeholder="Enter Judul">
    </div>

    <div class="form-group">
      <label for="">Isi</label>
      <input type="text" class="form-control" name="isi" id="" placeholder="Enter Isi">
    </div>

    <div class="form-group">
      <label for="">Source</label>
      <input type="text" class="form-control" name="sc" id="" placeholder="Enter Source">
    </div>

    <div class="form-group">
      <label for="">Gambar</label>
      <input type="file" class="form-control" name="gambar" id="" placeholder="Enter Gambar">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php include './../../layouts/footer.php'; ?>
