<?php 
 
class M_profil extends CI_Model{
	 function getAll($config){  
        $hasilquery=$this->db->get('users', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
}
?>