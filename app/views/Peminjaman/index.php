<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 mt-4">Tabel Peminjaman Buku</h1>

  <button type="button" class="btn btn-primary btn-icon-split m-3" data-toggle="modal" data-target="#formModal">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Daftar Pinjam</span>
  </button>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul Buku</th>
              <th>Mahasiswa</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['peminjaman'] as $peminjaman): ?>
              <tr>
                <td><?= $peminjaman['id_peminjaman']; ?></td>
                <td><?= $data['buku']->getBukuNameById($peminjaman['id_buku']) ?></td>
                <td><?= $data['mahasiswa']->getMahasiswaNameById($peminjaman['id_mahasiswa']) ?></td>                
                <td><?= $peminjaman['tanggal_pinjam']; ?></td>
                <td><?= $peminjaman['tanggal_kembali']; ?></td>
                <td>
                  <a href="<?= BASEURL; ?>/peminjaman/edit/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?= BASEURL; ?>/peminjaman/delete?id_peminjaman=<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-danger btn-icon-split">
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

<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Riwayat Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/peminjaman/add" method="post">
        <div class="form-group">
              <label for="id_buku"> Buku</label>
              <select class="form-control" id="" name="id_buku">
                <?php foreach ($data['buku']->getAllBuku() as $buku) : ?>
                  <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul_buku']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
          <div class="form-group">
              <label for="id_mahasiswa"> Mahasiswa</label>
              <select class="form-control" id="" name="id_mahasiswa">
                <?php foreach ($data['mahasiswa']->getAllMahasiswa() as $mhs) : ?>
                  <option value="<?php echo $mhs['id_mahasiswa']; ?>"><?php echo $mhs['nama_mahasiswa']; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
          <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
          </div>
          <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>