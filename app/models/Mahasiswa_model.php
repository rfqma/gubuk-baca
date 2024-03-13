<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
  }

  public function getMahasiswaById($id_mahasiswa)
  {
  }

  public function addMahasiswa($nama_mahasiswa, $email, $alamat, $nomor_telepon)
  {
  }

  public function updateMahasiswa($id_mahasiswa, $nama_mahasiswa, $email, $alamat, $nomor_telepon)
  {
  }

  public function hapusMahasiswa($id_mahasiswa)
  {
  }
}
