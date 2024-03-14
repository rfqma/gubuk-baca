<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Edit Buku</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Buku</h6>
    </div>
    <div class="card-body">
      <form action="<?= BASEURL; ?>/buku/update" method="POST">
        <input type="hidden" name="id_buku" value="<?= $data['buku']['id_buku'] ?>">
        <div class="form-group">
          <label for="judul_buku">Judul Buku</label>
          <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $data['buku']['judul_buku'] ?>">
        </div>
        <div class="form-group">
          <label for="id_kategori">Kategori Buku</label>
          <select class="form-control" id="id_kategori" name="id_kategori">
            <?php foreach ($data['kategori']->getAllKategori() as $kategori) : ?>
              <?php
              $selected = ($kategori['id_kategori'] == $data['buku']['id_kategori']) ? 'selected' : '';
              ?>
              <option value="<?= $kategori['id_kategori']; ?>" <?= $selected; ?>>
                <?= $kategori['nama_kategori']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="id_penulis">Nama Penulis</label>
          <select class="form-control" id="id_penulis" name="id_penulis">
            <?php foreach ($data['penulis']->getAllPenulis() as $penulis) : ?>
              <?php
              $selected = ($penulis['id_penulis'] == $data['buku']['id_penulis']) ? 'selected' : '';
              ?>
              <option value="<?= $penulis['id_penulis']; ?>" <?= $selected; ?>>
                <?= $penulis['nama_penulis']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="id_penerbit">Nama Penerbit</label>
          <select class="form-control" id="id_penerbit" name="id_penerbit">
            <?php foreach ($data['penerbit']->getAllPenerbit() as $penerbit) : ?>
              <?php
              $selected = ($penerbit['id_penerbit'] == $data['buku']['id_penerbit']) ? 'selected' : '';
              ?>
              <option value="<?= $penerbit['id_penerbit']; ?>" <?= $selected; ?>>
                <?= $penerbit['nama_penerbit']; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="tahun_terbit">Tahun Terbit</label>
              <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $data['buku']['tahun_terbit'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="stok">Stok Buku</label>
              <input type="text" class="form-control" id="jumlah_tersedia" name="jumlah_tersedia" value="<?= $data['buku']['jumlah_tersedia'] ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="<?= BASEURL ?>/buku" type="button" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- /.container-fluid -->