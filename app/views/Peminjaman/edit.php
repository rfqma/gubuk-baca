<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Daftar Pinjaman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Daftar Pinjaman</h6>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/peminjaman/update" method="POST">
                <input type="hidden" name="id_peminjaman" value="<?= $data['peminjaman']['id_peminjaman'] ?>">
                <div class="form-group">
                <label for="id_buku">Judul Buku</label>
                <select class="form-control" id="id_buku" name="id_buku">
                    <?php foreach ($data['buku']->getAllBuku() as $buku) : ?>
                    <?php
                    $selected = ($buku['id_buku'] == $data['peminjaman']['id_buku']) ? 'selected' : '';
                    ?>
                    <option value="<?= $buku['id_buku']; ?>" <?= $selected; ?>>
                        <?= $buku['judul_buku']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                </div>  
                <div class="form-group">
                <label for="id_mahasiswa">Nama Mahasiswa</label>
                <select class="form-control" id="id_mahasiswa" name="id_mahasiswa">
                    <?php foreach ($data['mahasiswa']->getAllMahasiswa() as $mhs) : ?>
                    <?php
                    $selected = ($mhs['id_mahasiswa'] == $data['peminjaman']['id_mahasiswa']) ? 'selected' : '';
                    ?>
                    <option value="<?= $mhs['id_mahasiswa']; ?>" <?= $selected; ?>>
                        <?= $mhs['nama_mahasiswa']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                </div>                        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal Pinjam</label>
                            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam"
                                value="<?= $data['peminjaman']['tanggal_pinjam'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_kembali">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali"
                                value="<?= $data['peminjaman']['tanggal_kembali'] ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= BASEURL ?>/peminjaman" type="button" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- /.container-fluid -->