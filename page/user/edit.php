<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Edit Data</h3>

  <?php $id = $_GET['id_user']; ?>
  <?php $query = "select * from data_user where id_user=$id"; ?>
  <?php $sql = mysqli_query($conn, $query); ?>
  <?php foreach($sql as $row): ?>
    <form method="POST" action="./../../proses/user/update.php?id_user=<?= $row['id_user'] ?>">
      
      <div class="form-group">
        <label for="">Nama</label>
        <input type="text" class="form-control" value="<?= $row['nama'] ?>" name="nama" id="" placeholder="Enter Nama">
      </div>
      
      <div class="form-group">
        <label for="">No Telepon</label>
        <input type="text" class="form-control" value="<?= $row['telp'] ?>" name="telp" id="" placeholder="Enter No Telepon">
      </div>
      
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" value="<?= $row['username'] ?>" name="username" id="" placeholder="Enter Username">
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" value="<?= $row['password'] ?>" id="exampleInputPassword1" placeholder="Password">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php endforeach ?>
<?php include './../../layouts/footer.php'; ?>
