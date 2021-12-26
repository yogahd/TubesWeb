<?php include './../../layouts/header.php'; ?>
  <div class="m-5"></div>
  <a href="./insert.php">Tambah Data</a>
  
  <?php if($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Sukses!</strong> Data berhasil dimasukkan.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($_GET['msg'] == 'errors'): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Data gagal dimasukan.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif ?>

  <div class="m-2"></div>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id Asal</th>
          <th>Asal Negara</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        <?php $query = "select * from data_asal"; ?>
        <?php $sql = mysqli_query($conn, $query); ?>
        <?php foreach($sql as $row): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['asal'] ?></td>
            <td>
              <a href="edit.php?id_asal=<?= $row['id_asal'] ?>" class="btn btn-info btn-sm">Ubah</a>
              <a href="./../../proses/asal/delete.php?id_asal=<?= $row['id_asal'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <?php include './../../layouts/footer.php'; ?>
