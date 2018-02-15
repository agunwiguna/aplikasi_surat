<?php
	Class M_carik Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function search($keyword)
    {
        $this->db->like('tanggal',$keyword);
        $query  =   $this->db->get('surat_keluar');
        return $query->result();
    }
    function searchs($keyword)
    {
        $this->db->like('waktu',$keyword);
        $query  =   $this->db->get('tolensi_rapat');
        return $query->result();
    }
    function searchp($keyword)
    {
        $this->db->like('level',$keyword);
        $query  =   $this->db->get('users');
        return $query->result();
    }
} 
?>