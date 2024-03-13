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

  public function getMahasiswaById($mahasiswa_id)
  {
  }

  public function addMahasiswa($nama, $email, $alamat, $nomor_telepon)
  {
  }

  public function updateMahasiswa($mahasiswa_id, $nama, $email, $alamat, $nomor_telepon)
  {
  }

  public function hapusMahasiswa($mahasiswa_id)
  {
  }
}
