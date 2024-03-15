<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Data Mahasiswa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Mahasiswa</h6>
    </div>
    <div class="card-body">
      <form action="<?= BASEURL; ?>/mahasiswa/update" method="POST">
        <input type="hidden" name="id_mahasiswa" value="<?= $data['mahasiswa']['id_mahasiswa'] ?>">
        <div class="form-group">
          <label for="nama_mahasiswa">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $data['mahasiswa']['nama_mahasiswa'] ?>">
        </div>
        <div class="form-group">
          <label for="email"> E-mail</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= $data['mahasiswa']['email'] ?>">
        </div>
        <div class="form-group">
          <label for="alamat"> Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['mahasiswa']['alamat'] ?>">
        </div>
        <div class="form-group">
          <label for="nomor_telepon"> Nomor Telepon</label>
          <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= $data['mahasiswa']['nomor_telepon'] ?>">
        </div>           
        <div class="modal-footer">
          <a href="<?= BASEURL ?>/mahasiswa" type="button" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.container-fluid -->