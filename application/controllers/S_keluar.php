<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_keluar extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		//Load Dependencies
		$this->load->helper(array('url'));
        $this->load->library('pagination');
        $this->load->database();
        $this->load->model('m_carik');
	}
	public function index()
	{
		// konfigurasi class pagination
        $config['base_url']=base_url()."s_keluar/index";
        $config['total_rows']= $this->db->query("SELECT * FROM surat_keluar;")->num_rows();
        $config['per_page']=15;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';

        //Tambahan untuk styling
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['first_link']='< Pertama ';
        $config['last_link']='Terakhir > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('m_keluar');
        $data['user']=$this->m_keluar->getAll($config);
        $this->load->view('s_keluar', $data);
	}
	function search_keyword()
    {
        $keyword        = $this->input->post('keyword');
        $data['user']   = $this->m_carik->search($keyword);
        $this->load->view('s_keluar',$data);
    }
}

