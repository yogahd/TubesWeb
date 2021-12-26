<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Edit Data</h3>

  <?php $id = $_GET['id_asal']; ?>
  <?php $query = "select * from data_asal where id_asal=$id"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <form method="POST" action="./../../proses/asal/update.php?id_asal=<?= $row['id_asal'] ?>">
      
      <div class="form-group">
        <label for="">Asal Negara</label>
        <input type="text" class="form-control" value="<?= $row['id_asal'] ?>" name="asal" id="" placeholder="Enter Asal Negara">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php endforeach ?>
<?php include './../../layouts/footer.php'; ?>
