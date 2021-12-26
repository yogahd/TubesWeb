<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <h3>Input Data</h3>
  <form method="POST" action="./../../proses/asal/insert.php">
    <div class="form-group">
      <label for="">Asal Negara</label>
      <input type="text" class="form-control" name="asal" id="" placeholder="Enter Asal Negara">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php include './../../layouts/footer.php'; ?>
