<?php

class Penulis extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Penulis - Gubuk Baca';
        $data['penulis'] = $this->model('Penulis_model')->getAllPenulis();

        $this->view('templates/header', $data);
        $this->view('penulis/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id_penulis)
    {
        $data['judul'] = 'Detail Penulis - Gubuk Baca';
        $data['penulis'] = $this->model('Penulis_model')->getPenulisById($id_penulis);

        $this->view('penulis/detail', $data);
    }

    public function add()
    {
        $nama_penulis = $_POST['nama_penulis'];
        $kewarganegaraan = $_POST['kewarganegaraan'];

        if ($this->model('Penulis_model')->addPenulis($nama_penulis, $kewarganegaraan) > 0){
            echo "<script type='text/javascript'> alert('Data berhasil ditambahkan!');</script>";
            header('Location: ' . BASEURL . '/penulis');
            exit;
        } else {
            echo "<script type='text/javascript'> alert('Data gagal ditambahkan!');</script>";
            header('Location: ' . BASEURL . '/penulis');
            exit;
        }
    }

    public function edit($id_penulis)
    {
        $data['judul'] = 'Edit Penulis - Gubuk Baca';
        $data['penulis'] = $this->model('Penulis_model')->getPenulisById($id_penulis);

        $this->view('templates/header', $data);
        $this->view('templates/footer', $data);
        $this->view('penulis/edit', $data);
    }

    public function update()
    {
        $id_penulis = $_POST['id_penulis'];
        $nama_penulis = $_POST['nama_penulis'];
        $kewarganegaraan = $_POST['kewarganegaraan'];

        if ($this->model('Penulis_model')->updatePenulis($id_penulis, $nama_penulis, $kewarganegaraan) > 0){
            echo "<script type='text/javascript> alert('Data berhasil diubah!');</script>";
            header('Location: ' . BASEURL .'/penulis');
            exit;
        } else {
            echo "<script type='text/javascript> alert('Data gagal diubah!');</script>";
            header('Location: ' . BASEURL .'/penulis');
            exit;
        }
    }

    public function delete()
    {
        $currentUrl = $_SERVER['SERVER_URI'];

        $urlParts = parse_url($currentUrl);
        parse_str($urlParts['query'], $queryParams);

        if (isset($queryParams['id_penulis']) && !empty($queryParams['id_penulis'])){
            $id_penulis = $queryParams['id_penulis'];

            if (ctype_digit($id_penulis)){
                if ($this->model('Penulis_model')->hapusPenulis($id_penulis) > 0){
                    echo "<script type='text/javascript> alert('Data berhasil hapus!');</script>";
                    header('Location: ' . BASEURL .'/penulis');
                    exit;
                } else {
                    echo "<script type='text/javascript> alert('Data berhasil dihapus!');</script>";
                    header('Location: ' . BASEURL .'/penulis');
                    exit;
                }
            } else {
                echo "id_penulis bukan integer!";
                exit;
            }
        } else {
            echo "id_penulis tidak ditemukan!";
            exit;
        }
    }
}
?>