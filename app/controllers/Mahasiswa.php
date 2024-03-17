<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Mahasiswa - Gubuk Baca';
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();


    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer', $data);
  }
  public function add()
  {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];


    if ($this->model('Mahasiswa_model')->addMahasiswa($nama_mahasiswa, $email, $alamat, $nomor_telepon,) > 0) {

      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {

      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
  public function edit($id_mahasiswa)
  {
    $data['judul'] = 'Edit Data Mahasiswa - Gubuk Baca';
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id_mahasiswa);


    $this->view('templates/header', $data);
    $this->view('mahasiswa/edit', $data);
    $this->view('templates/footer', $data);
  }
  public function update()
  {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    if ($this->model('Mahasiswa_model')->updateMahasiswa($id_mahasiswa, $nama_mahasiswa, $email, $alamat, $nomor_telepon) > 0) {

      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {

      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
  public function delete()
  {
    // mengambil url
    $currentUrl = $_SERVER['REQUEST_URI'];

    // parse url untuk ekstraksi parameter id_mahasiswa
    $urlParts = parse_url($currentUrl);
    parse_str($urlParts['query'], $queryParams);

    // cek apakah parameter id_mahasiswa ada di dalam url
    if (isset($queryParams['id_mahasiswa']) && !empty($queryParams['id_mahasiswa'])) {
      // mengambil nilai parameter id_mahasiswa dari url
      $id_mahasiswa = $queryParams['id_mahasiswa'];

      // cek apakah id_mahasiswa adalah integer
      if (ctype_digit($id_mahasiswa)) {
        // panggil method model untuk hapus data
        if ($this->model('Mahasiswa_model')->hapusMahasiswa($id_mahasiswa) > 0) {;
          header('Location: ' . BASEURL . '/mahasiswa');
          exit;
        } else {

          header('Location: ' . BASEURL . '/mahasiswa');
          exit;
        }
      } else {
        echo "id_mahasiswa bukan integer!";
        exit;
      }
    } else {
      echo "id_mahasiswa tidak ditemukan!";
      exit;
    }
  }
}
