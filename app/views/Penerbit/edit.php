<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Data Penerbit</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Penerbit</h6>
    </div>
    <div class="card-body">
      <form action="<?= BASEURL; ?>/penerbit/update" method="POST">
        <input type="hidden" name="id_penerbit" value="<?= $data['penerbit']['id_penerbit'] ?>">
        <div class="form-group">
          <label for="nama_penerbit">Nama Penerbit</label>
          <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?= $data['penerbit']['nama_penerbit'] ?>">
        </div>
        <div class="form-group">
          <label for="negara_asal">Negara Asal</label>
          <input type="text" class="form-control" id="negara_asal" name="negara_asal" value="<?= $data['penerbit']['negara_asal'] ?>">
        </div> 
        <div class="modal-footer">
          <a href="<?= BASEURL ?>/penerbit" type="button" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.container-fluid -->