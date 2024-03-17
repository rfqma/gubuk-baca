<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tabel Daftar Penerbit</h1>
  <!-- Button -->
  <button type="button" class="btn btn-primary btn-icon-split m-3" data-toggle="modal" data-target="#addPenerbitModal">
    <span class="icon text-white-50">
      <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Penerbit</span>
  </button>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Penerbit</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Penerbit</th>
              <th>Negara Asal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['penerbit'] as $penerbit) : ?>
              <tr>
                <td><?= $penerbit['id_penerbit']; ?></td>
                <td><?= $penerbit['nama_penerbit']; ?></td>
                <td><?= $penerbit['negara_asal']; ?></td>                
                <td>
                  <a href="<?= BASEURL; ?>/penerbit/edit/<?= $penerbit['id_penerbit']; ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  <a href="<?= BASEURL; ?>/penerbit/delete?id_penerbit=<?= $penerbit['id_penerbit']; ?>" class="btn btn-danger btn-icon-split">
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

  <!-- add book modal -->
  <div class="modal fade" id="addPenerbitModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Tambah Data Penerbit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/penerbit/add" method="POST">
            <div class="form-group">
              <label for="nama_penerbit">Nama Penerbit</label>
              <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit">
            </div>            
            <div class="form-group">
              <label for="negara_asal">Negara Asal</label>
              <input type="text" class="form-control" id="negara_asal" name="negara_asal">
            </div>            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah Penerbit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- /.container-fluid -->