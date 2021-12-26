<?php include './../../layouts/header.php'; ?>
<div class="container" style="margin-top: 50px">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5 class="text-center">Login</h5>
        <form action="login.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<?php include './../../layouts/footer.php'; ?>