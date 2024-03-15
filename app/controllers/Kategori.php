<?php

class Kategori extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Kategori - Gubuk Baca';
    $data['kategori'] = $this->model('Kategori_model')->getAllKategori();

    $this->view('templates/header', $data);
    $this->view('kategori/index', $data);
    $this->view('templates/footer', $data);
  }

  public function add()
  {
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    if ($this->model('Kategori_model')->addKategori($nama_kategori, $deskripsi) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/kategori');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/kategori');
      exit;
    }
  }

  public function edit($id_kategori)
  {
    $data['judul'] = 'Edit Kategori - Gubuk Baca';
    $data['kategori'] = $this->model('Kategori_model')->getKategoriById($id_kategori);

    $this->view('templates/header', $data);
    $this->view('kategori/edit', $data);
    $this->view('templates/footer', $data);
  }

  public function update()
  {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];

    if ($this->model('Kategori_model')->updateKategori($id_kategori, $nama_kategori, $deskripsi) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil diubah!'); </script>";
      header('Location: ' . BASEURL . '/kategori');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal diubah!'); </script>";
      header('Location: ' . BASEURL . '/kategori');
      exit;
    }
  }

  public function delete()
  {
    // mengambil url
    $currentUrl = $_SERVER['REQUEST_URI'];

    // parse url untuk ekstraksi parameter id_kategori
    $urlParts = parse_url($currentUrl);
    parse_str($urlParts['query'], $queryParams);

    // cek apakah parameter id_kategori ada di dalam url
    if (isset($queryParams['id_kategori']) && !empty($queryParams['id_kategori'])) {
      // mengambil nilai parameter id_kategori dari url
      $id_kategori = $queryParams['id_kategori'];

      // cek apakah id_kategori adalah integer
      if (ctype_digit($id_kategori)) {
        // panggil method model untuk hapus data
        if ($this->model('Kategori_model')->hapusKategori($id_kategori) > 0) {
          echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
          header('Location: ' . BASEURL . '/kategori');
          exit;
        } else {
          echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
          header('Location: ' . BASEURL . '/kategori');
          exit;
        }
      } else {
        echo "id_kategori bukan integer!";
        exit;
      }
    } else {
      echo "id_kategori tidak ditemukan!";
      exit;
    }
  }
}
