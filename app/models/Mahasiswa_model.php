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
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultAll();
  }

  public function getMahasiswaById($id_mahasiswa)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mahasiswa=:id_mahasiswa');
    $this->db->bind('id_mahasiswa', $id_mahasiswa);
    return $this->db->resultSingle();
  }
  public function getMahasiswaNameById($id_mahasiswa)
  {
    $this->db->query('SELECT nama_mahasiswa FROM ' . $this->table . ' WHERE id_mahasiswa=:id_mahasiswa');
    $this->db->bind('id_mahasiswa', $id_mahasiswa);
    return $this->db->resultSingle()['nama_mahasiswa'];
  }

  public function addMahasiswa($nama_mahasiswa, $email, $alamat, $nomor_telepon)
  {
    $query = "INSERT INTO " . $this->table . " VALUES ('', :nama_mahasiswa, :email, :alamat, :nomor_telepon)";

    $this->db->query($query);
    $this->db->bind('nama_mahasiswa', $nama_mahasiswa);
    $this->db->bind('email', $email);
    $this->db->bind('alamat', $alamat);
    $this->db->bind('nomor_telepon', $nomor_telepon);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function updateMahasiswa($id_mahasiswa, $nama_mahasiswa, $email, $alamat, $nomor_telepon)
  {
    $query = "UPDATE " . $this->table . " SET nama_mahasiswa=:nama_mahasiswa, email=:email, alamat=:alamat, nomor_telepon=:nomor_telepon WHERE id_mahasiswa=:id_mahasiswa";

    $this->db->query($query);
    $this->db->bind('id_mahasiswa', $id_mahasiswa);
    $this->db->bind('nama_mahasiswa', $nama_mahasiswa);
    $this->db->bind('email', $email);
    $this->db->bind('alamat', $alamat);
    $this->db->bind('nomor_telepon', $nomor_telepon);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusMahasiswa($id_mahasiswa)
  {
    $query = "DELETE FROM " . $this->table . " WHERE id_mahasiswa=:id_mahasiswa";

    $this->db->query($query);
    $this->db->bind('id_mahasiswa', $id_mahasiswa);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
