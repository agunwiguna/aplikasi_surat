<?php
  class Model_users extends CI_Model {

    //mengambil tabel users
    public $table = 'users';

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 2 maka user tidak aktif
      if ($query->active == 0) return 2;

      //jika bernilai 3 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 3;

      return $query;
    }

  }
