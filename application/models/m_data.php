<?php 
 
class M_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('surat_masuk',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('surat_masuk')->num_rows();
	}
}
?>