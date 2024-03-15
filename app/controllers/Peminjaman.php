<?php

class Peminjaman extends Controller
{
  public function index()
  {
      $data['judul'] = 'Daftar Peminjaman - Gubuk Baca';
      $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
      $data['buku'] = $this->model('Buku_model');
      $data['mahasiswa'] = $this->model('Mahasiswa_model');
      $this->view('templates/header', $data);
      $this->view('peminjaman/index', $data);
      $this->view('templates/footer', $data);
  }


    public function detail($id_peminjaman)
    {
        $data['judul'] = 'Detail Peminjaman - Gubuk Baca';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getPeminjamanById($id_peminjaman);

        $this->view('peminjaman/detail', $data);
    }

    public function add()
    {
        // Ambil data dari form peminjaman
        $id_buku = $_POST['id_buku'];
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

        if ($this->model('Peminjaman_model')->addPeminjaman($id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali) > 0) {
            echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            echo "<script type='text/javascript'> alert('Data gagal ditambahkan!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function update()
    {
        // Ambil data dari form update peminjaman
        $id_peminjaman = $_POST['id_peminjaman'];
        $id_buku = $_POST['id_buku'];
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

        if ($this->model('Peminjaman_model')->updatePeminjaman($id_peminjaman, $id_buku, $id_mahasiswa, $tanggal_pinjam, $tanggal_kembali) > 0) {
            echo "<script type='text/javascript'> alert('Data berhasil diubah!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            echo "<script type='text/javascript'> alert('Data gagal diubah!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function delete()
    {
        // Ambil ID peminjaman yang akan dihapus
        $id_peminjaman = $_POST['id_peminjaman'];

        if ($this->model('Peminjaman_model')->hapusPeminjaman($id_peminjaman) > 0) {
            echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

    public function tambah() {
        if($this->model('Peminjaman_model')->tambahPinjam($_POST) > 0) {
          header('Location: ' . BASE_URL . '/peminjaman');
          exit;
       }
       }

    
}