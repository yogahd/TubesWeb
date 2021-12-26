<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Edit Data</h3>

  <?php $id = $_GET['id_kategori']; ?>
  <?php $query = "select * from data_kategori where id_kategori=$id"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <form method="POST" action="./../../proses/kategori/update.php?id_kategori=<?= $row['id_kategori'] ?>">
      
      <div class="form-group">
        <label for="">Kategori Liga</label>
        <input type="text" class="form-control" value="<?= $row['id_kategori'] ?>" name="kategori" id="" placeholder="Enter Kategori Liga">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php endforeach ?>
<?php include './../../layouts/footer.php'; ?>
