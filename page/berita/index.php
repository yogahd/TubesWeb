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
          <th>Id Berita</th>
          <th>Club</th>
          <th>Asal</th>
          <th>Kategori</th>
          <th>User</th>
          <th>Judul</th>
          <th>Isi</th>
          <!-- <th>Source</th> -->
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        <?php $query = "select * from data_berita db inner join data_club dc on dc.id_club = db.id_klub inner join data_asal da on da.id_asal = db.id_asal inner join data_kategori dk on dk.id_kategori = db.id_kategori inner join data_user du on du.id_user = db.id_user"; ?>
        <?php $sql = mysqli_query($conn, $query); ?>
        <?php foreach($sql as $row): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['club'] ?></td>
            <td><?= $row['asal'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['isi'] ?></td>
            <!-- <td><?= $row['sc'] ?></td> -->
            <td>
              <a href="edit.php?id_berita=<?= $row['id_berita'] ?>" class="btn btn-info btn-sm">Ubah</a>
              <a href="./../../proses/berita/delete.php?id_berita=<?= $row['id_berita'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <?php include './../../layouts/footer.php'; ?>
