<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Input Data</h3>
  <form method="POST" action="./../../proses/user/insert.php">
    <div class="form-group">
      <label for="">Nama</label>
      <input type="text" class="form-control" name="nama" id="" placeholder="Enter Nama">
    </div>
    <div class="form-group">
      <label for="">No Telepon</label>
      <input type="text" class="form-control" name="telp" id="" placeholder="Enter No Telepon">
    </div>
    <div class="form-group">
      <label for="">Username</label>
      <input type="text" class="form-control" name="username" id="" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php include './../../layouts/footer.php'; ?>
