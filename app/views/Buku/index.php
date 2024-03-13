<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tabel Daftar Buku</h1>

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
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->