<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tabel Daftar Buku</h1>
  <!-- Button -->
  <a href="#" class="btn btn-primary btn-icon-split m-3">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data Buku</span>
  </a>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Stok</th>
              <th>Action</th>
            </tr>
          </thead>
          <!-- <tfoot>
            <tr>
              <th>ID</th>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Stok</th>
              <th>Action</th>
            </tr>
          </tfoot> -->
          <tbody>
            <?php foreach ($data['buku'] as $buku) : ?>
              <tr>
                <td><?= $buku['id_buku']; ?></td>
                <td><?= $buku['judul_buku']; ?></td>
                <td><?= $data['kategori']->getKategoriNameById($buku['id_kategori']) ?></td>
                <td><?= $data['penulis']->getPenulisNameById($buku['id_penulis']) ?></td>
                <td><?= $data['penerbit']->getPenerbitNameById($buku['id_penerbit']) ?></td>
                <td><?= $buku['tahun_terbit']; ?></td>
                <td><?= $buku['jumlah_tersedia']; ?></td>
                <td>
                  <a href="edit_buku.php?id=<?= $buku['id_buku']; ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="hapus_buku.php?id=<?= $buku['id_buku']; ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Hapus</span>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
