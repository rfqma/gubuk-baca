<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Penulis</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Penulis</h6>
    </div>
    <div class="card-body">
      <form action="<?= BASEURL; ?>/penulis/update" method="POST">
        <input type="hidden" name="id_penulis" value="<?= $data['penulis']['id_penulis'] ?>">
        <div class="form-group">
          <label for="nama_penulis">Nama Penulis</label>
          <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" value="<?= $data['penulis']['nama_penulis'] ?>">
        </div>
        <div class="form-group">
          <label for="nama_penulis">Kewarganegaraan</label>
          <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?= $data['penulis']['kewarganegaraan'] ?>">
        </div>
        <div class="modal-footer">
          <a href="<?= BASEURL ?>/penulis" type="button" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.container-fluid -->