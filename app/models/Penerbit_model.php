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

  public function getPenerbitById($id_penerbit)
  {
  }

  public function addPenerbit($nama_penerbit, $negara_asal)
  {
  }

  public function updatePenerbit($id_penerbit, $nama_penerbit, $negara_asal)
  {
  }

  public function hapusPenerbit($id_penerbit)
  {
  }
}
