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

  public function edit($id_buku)
  {
    $data['judul'] = 'Edit Buku - Gubuk Baca';
    $data['buku'] = $this->model('Buku_model')->getBukuById($id_buku);
    $data['kategori'] = $this->model('Kategori_model');
    $data['penulis'] = $this->model('Penulis_model');
    $data['penerbit'] = $this->model('Penerbit_model');

    $this->view('templates/header', $data);
    $this->view('buku/edit', $data);
    $this->view('templates/footer', $data);
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
    // mengambil url
    $currentUrl = $_SERVER['REQUEST_URI'];

    // parse url untuk ekstraksi parameter id_buku
    $urlParts = parse_url($currentUrl);
    parse_str($urlParts['query'], $queryParams);

    // cek apakah parameter id_buku ada di dalam url
    if (isset($queryParams['id_buku']) && !empty($queryParams['id_buku'])) {
      // mengambil nilai parameter id_buku dari url
      $id_buku = $queryParams['id_buku'];

      // cek apakah id_buku adalah integer
      if (ctype_digit($id_buku)) {
        // panggil method model untuk hapus data
        if ($this->model('Buku_model')->hapusBuku($id_buku) > 0) {
          echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
          header('Location: ' . BASEURL . '/buku');
          exit;
        } else {
          echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
          header('Location: ' . BASEURL . '/buku');
          exit;
        }
      } else {
        echo "id_buku bukan integer!";
        exit;
      }
    } else {
      echo "id_buku tidak ditemukan!";
      exit;
    }
  }
}
