<?php

class Penerbit extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Penerbit - Gubuk Baca';
    $data['penerbit'] = $this->model('Penerbit_model')->getAllPenerbit();

    $this->view('templates/header', $data);
    $this->view('penerbit/index', $data);
    $this->view('templates/footer', $data);
  }

  public function detail($id_penerbit)
  {
    $data['judul'] = 'Detail Penerbit - Gubuk Baca';
    $data['penerbit'] = $this->model('Penerbit_model')->getPenerbitById($id_penerbit);
    $this->view('penerbit/detail', $data);
  }

 

  public function add()
  {
    
    $nama_penerbit = $_POST['nama_penerbit'];
    $negara_asal = $_POST['negara_asal'];
    

    if ($this->model('Penerbit_model')->addPenerbit( $nama_penerbit, $negara_asal) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/penerbit');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal ditambahkan!'); </script>";
      header('Location: ' . BASEURL . '/penerbit');
      exit;
    }
  }

  public function edit($id_penerbit)
  {
    $data['judul'] = 'Edit Penerbit - Gubuk Baca';
    $data['penerbit'] = $this->model('Penerbit_model')->getPenerbitById($id_penerbit);
   
    $this->view('templates/header', $data);
    $this->view('penerbit/edit', $data);
    $this->view('templates/footer', $data);
  }

  public function update()
  {
    $id_penerbit = $_POST['id_penerbit'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $negara_asal = $_POST['negara_asal'];

    if ($this->model('Penerbit_model')->updatePenerbit($id_penerbit, $nama_penerbit, $negara_asal) > 0) {
      echo "<script type='text/javascript'> alert('Data berhasil diubah!'); </script>";
      header('Location: ' . BASEURL . '/penerbit');
      exit;
    } else {
      echo "<script type='text/javascript'> alert('Data gagal diubah!'); </script>";
      header('Location: ' . BASEURL . '/penerbit');
      exit;
    }
  }

  public function delete()
  {
    // mengambil url
    $currentUrl = $_SERVER['REQUEST_URI'];

    // parse url untuk ekstraksi parameter id_penerbit
    $urlParts = parse_url($currentUrl);
    parse_str($urlParts['query'], $queryParams);

    // cek apakah parameter id_penerbit ada di dalam url
    if (isset($queryParams['id_penerbit']) && !empty($queryParams['id_penerbit'])) {
      // mengambil nilai parameter id_penerbit dari url
      $id_penerbit = $queryParams['id_penerbit'];

      // cek apakah id_penerbit adalah integer
      if (ctype_digit($id_penerbit)) {
        // panggil method model untuk hapus data
        if ($this->model('Penerbit_model')->hapusPenerbit($id_penerbit) > 0) {
          echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
          header('Location: ' . BASEURL . '/penerbit');
          exit;
        } else {
          echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
          header('Location: ' . BASEURL . '/penerbit');
          exit;
        }
      } else {
        echo "id_penerbit bukan integer!";
        exit;
      }
    } else {
      echo "id_penerbit tidak ditemukan!";
      exit;
    }
  }
}
