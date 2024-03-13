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

  public function getPenulisById($id_penulis)
  {
  }

  public function addPenulis($nama_penulis, $kewarganegaraan)
  {
  }

  public function updatePenulis($id_penulis, $nama_penulis, $kewarganegaraan)
  {
  }

  public function hapusPenulis($id_penulis)
  {
  }
}
