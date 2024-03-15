<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Kategori</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori</h6>
    </div>
    <div class="card-body">
      <form action="<?= BASEURL; ?>/kategori/update" method="POST">
        <input type="hidden" name="id_kategori" value="<?= $data['kategori']['id_kategori'] ?>">
        <div class="form-group">
          <label for="nama_kategori">Nama Kategori</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $data['kategori']['nama_kategori'] ?>">
        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data['kategori']['deskripsi'] ?>">
        </div>
        <div class="modal-footer">
          <a href="<?= BASEURL ?>/kategori" type="button" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.container-fluid -->