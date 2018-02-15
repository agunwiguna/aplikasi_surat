<?php
	Class Cari_profil Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('username',$keyword);
        $query  =   $this->db->get('users');
        return $query->result();
    }
} 
?>