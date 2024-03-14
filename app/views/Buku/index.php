<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tabel Daftar Buku</h1>
  <!-- Button -->
  <button type="button" class="btn btn-primary btn-icon-split m-3" data-toggle="modal" data-target="#addbookModal">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data Buku</span>
  </button>


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
<div class="modal fade" id="addbookModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="
          <?= BASEURL; ?>/buku/add" method="POST">
          <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori Buku</label>
            <select class="form-control" id="" name="id_kategori">
              <?php foreach ($data['kategori']->getAllKategori() as $kategori): ?>
                <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="penulis">Nama Penulis</label>
            <select class="form-control" id="" name="id_penulis">
              <?php foreach ($data['penulis']->getAllPenulis() as $penulis): ?>
                <option value="<?php echo $penulis['id_penulis']; ?>"><?php echo $penulis['nama_penulis']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="penerbit">Nama Penerbit</label>
            <select class="form-control" id="" name="id_penerbit">
              <?php foreach ($data['penerbit']->getAllPenerbit() as $penerbit): ?>
                <option value="<?php echo $penerbit['id_penerbit']; ?>"><?php echo $penerbit['nama_penerbit']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="stok">Stok Buku</label>
                <input type="text" class="form-control" id="jumlah_tersedia" name="jumlah_tersedia">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
