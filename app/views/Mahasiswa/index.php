<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tabel Daftar Mahasiswa</h1>
  <!-- Button -->
  <button type="button" class="btn btn-primary btn-icon-split m-3" data-toggle="modal" data-target="#addmhsModal">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data Mahasiswa</span>
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
              <th style="text-align: center;">ID</th>
              <th style="text-align: center;">Nama</th>
              <th style="text-align: center;">Email</th>
              <th style="text-align: center;">Alamat</th>
              <th style="text-align: center;">Nomor Telepon</th>              
              <th style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['mahasiswa'] as $mhs) : ?>
              <tr>
                <td><?= $mhs['id_mahasiswa']; ?></td>
                <td><?= $mhs['nama_mahasiswa']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
                <td><?= $mhs['nomor_telepon']; ?></td>
            
                <td style="text-align: center;">
                  <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id_mahasiswa']; ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?= BASEURL; ?>/mahasiswa/delete?id_mahasiswa=<?= $mhs['id_mahasiswa']; ?>" class="btn btn-danger btn-icon-split">
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

  <!-- add mhs modal -->
  <div class="modal fade" id="addmhsModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/mahasiswa/add" method="POST">
            <div class="form-group">
              <label for="nama_mahasiswa">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
              <label for="nomor_telepon">Nomer Telepon</label>
              <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- /.container-fluid -->