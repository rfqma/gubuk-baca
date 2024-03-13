<?php

class Penulis_model
{
  private $table = 'penulis';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPenulis()
  {
  }

  public function getPenulisById($penulis_id)
  {
  }

  public function addPenulis($nama_penulis, $tanggal_lahir, $kewarganegaraan)
  {
  }

  public function updatePenulis($penulis_id, $nama_penulis, $tanggal_lahir, $kewarganegaraan)
  {
  }

  public function hapusPenulis($penulis_id)
  {
  }
}
