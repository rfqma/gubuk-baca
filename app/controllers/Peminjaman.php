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
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $id_buku = $_POST['id_buku'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

        if ($this->model('Peminjaman_model')->addPeminjaman($id_mahasiswa, $id_buku, $tanggal_pinjam, $tanggal_kembali) > 0) {
            echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            echo "<script type='text/javascript'> alert('Data gagal ditambahkan!'); </script>";
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }

        public function edit($id_peminjaman)
    {
        $data['judul'] = 'Daftar Peminjaman - Gubuk Baca';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getPeminjamanById($id_peminjaman);
        $data['buku'] = $this->model('Buku_model');
        $data['mahasiswa'] = $this->model('Mahasiswa_model');
        
        $this->view('templates/header', $data);
        $this->view('peminjaman/edit', $data);
        $this->view('templates/footer', $data);
    }

    public function update()
    {
        // Ambil data dari form update peminjaman
        $id_peminjaman = $_POST['id_peminjaman'];
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $id_buku = $_POST['id_buku'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

        if ($this->model('Peminjaman_model')->updatePeminjaman($id_peminjaman, $id_mahasiswa, $id_buku, $tanggal_pinjam, $tanggal_kembali) > 0) {
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
    // mengambil url
    $currentUrl = $_SERVER['REQUEST_URI'];

    // parse url untuk ekstraksi parameter id_peminjaman
    $urlParts = parse_url($currentUrl);
    parse_str($urlParts['query'], $queryParams);

    // cek apakah parameter id_peminjaman ada di dalam url
    if (isset($queryParams['id_peminjaman']) && !empty($queryParams['id_peminjaman'])) {
      // mengambil nilai parameter id_peminjaman dari url
      $id_peminjaman = $queryParams['id_peminjaman'];

      // cek apakah id_peminjaman adalah integer
      if (ctype_digit($id_peminjaman)) {
        // panggil method model untuk hapus data
        if ($this->model('Peminjaman_model')->hapusPeminjaman($id_peminjaman) > 0) {
          echo "<script type='text/javascript'> alert('Data berhasil dihapus!'); </script>";
          header('Location: ' . BASEURL . '/peminjaman');
          exit;
        } else {
          echo "<script type='text/javascript'> alert('Data gagal dihapus!'); </script>";
          header('Location: ' . BASEURL . '/peminjaman');
          exit;
        }
      } else {
        echo "id_peminjaman bukan integer!";
        exit;
      }
    } else {
      echo "id_peminjaman tidak ditemukan!";
      exit;
    }
  }

    
}