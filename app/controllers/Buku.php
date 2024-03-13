<?php

class Buku extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Buku - Gubuk Baca';
    $data['buku'] = $this->model('Buku_model')->getAllBuku();
    $data['kategori'] = $this->model('Kategori_model');
    $data['penulis'] = $this->model('Penulis_model');
    $data['penerbit'] = $this->model('Penerbit_model');

    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer', $data);
  }

  public function detail($id_buku)
  {
    $data['judul'] = 'Detail Buku - Gubuk Baca';
    $data['buku'] = $this->model('Buku_model')->getBukuById($id_buku);

    $this->view('buku/detail', $data);
  }

  public function add()
  {
    $judul_buku = $_POST['judul_buku'];
    $id_kategori = $_POST['id_kategori'];
    $id_penulis = $_POST['id_penulis'];
    $id_penerbit = $_POST['id_penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_tersedia = $_POST['jumlah_tersedia'];

    if ($this->model('Buku_model')->addBuku($judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    }
  }

  public function getUpdate()
  {
    $id_buku = $_POST['id_buku'];
    $data = $this->model('Buku_model')->getBukuById($id_buku);
    echo json_encode($data);
  }

  public function update()
  {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $id_kategori = $_POST['id_kategori'];
    $id_penulis = $_POST['id_penulis'];
    $id_penerbit = $_POST['id_penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jumlah_tersedia = $_POST['jumlah_tersedia'];

    if ($this->model('Buku_model')->updateBuku($id_buku, $judul_buku, $id_kategori, $id_penulis, $id_penerbit, $tahun_terbit, $jumlah_tersedia) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil diubah!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal diubah!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    }
  }

  public function delete()
  {
    $id_buku = $_POST['id_buku'];

    if ($this->model('Buku_model')->hapusBuku($id_buku) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
      header('Location: ' . BASEURL . '/buku');
      exit;
    }
  }
}
