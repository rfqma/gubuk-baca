<?php

class Penerbit_model
{
  private $table = 'penerbit';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPenerbit()
  {
  }

  public function getPenerbitById($penerbit_id)
  {
  }

  public function addPenerbit($nama_penerbit, $negara_asal, $tahun_berdiri)
  {
  }

  public function updatePenerbit($penerbit_id, $nama_penerbit, $negara_asal, $tahun_berdiri)
  {
  }

  public function hapusPenerbit($penerbit_id)
  {
  }
}
