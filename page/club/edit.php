<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Edit Data</h3>

  <?php $id = $_GET['id_club']; ?>
  <?php $query = "select * from data_club where id_club=$id"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <form method="POST" action="./../../proses/club/update.php?id_club=<?= $row['id_club'] ?>">
      
      <div class="form-group">
        <label for="">Club</label>
        <input type="text" class="form-control" value="<?= $row['id_club'] ?>" name="club" id="" placeholder="Enter Club">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php endforeach ?>
<?php include './../../layouts/footer.php'; ?>
