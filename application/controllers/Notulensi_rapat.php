<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notulensi_rapat extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		//Load Dependencies
		$this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
        $this->load->model('m_carik');
	}
	public function index()
	{
		// konfigurasi class pagination
        $config['base_url']=base_url()."notulensi_rapat/index";
        $config['total_rows']= $this->db->query("SELECT * FROM tolensi_rapat;")->num_rows();
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
        $this->load->model('m_rapat');
        $data['user']=$this->m_rapat->getAll($config);
        $this->load->view('notulensi_rapat', $data);
	}
	//Add Item
	public function action_add()
	{
		$data = array(
			'waktu' => $this -> input -> post('waktu') ,
			'tempat' => $this -> input -> post('tempat') ,
			'pimpinan' => $this -> input -> post('pimpinan'),
			'agenda' => $this -> input -> post('agenda'),
			'kehadiran' => $this -> input -> post('kehadiran'),
			'ringkasan' => $this -> input -> post('ringkasan'),
			'lampiran' => $this -> input -> post('lampiran')  
		);
		$this -> db-> insert('tolensi_rapat',$data);
		redirect ('notulensi_rapat');
	}
	//Update one item
	public function update($id = NULL)
	{
		$this -> db-> where('id',$id);
		$data['content'] = $this -> db-> get('tolensi_rapat');
		$this -> load -> view('update_rapat',$data);	
	}
	public function action_update($id='')
	{
		$data = array(
			'waktu' => $this -> input -> post('waktu') ,
			'tempat' => $this -> input -> post('tempat') ,
			'pimpinan' => $this -> input -> post('pimpinan'),
			'agenda' => $this -> input -> post('agenda'),
			'kehadiran' => $this -> input -> post('kehadiran'),
			'ringkasan' => $this -> input -> post('ringkasan'),
			'lampiran' => $this -> input -> post('lampiran')  
		);
		$this -> db-> where('id',$id);
		$this -> db-> update('tolensi_rapat',$data);
		redirect ('notulensi_rapat');
	}
	//Delete one item
	public function delete($id = NULL)
	{
		$this -> db-> where('id',$id);
		$this -> db-> delete('tolensi_rapat');
		redirect ('notulensi_rapat');	
	}
	//Pencarian
	public function hasil()
    {
        $keyword    	= $this->input->post('keyword');
        $data['user']   = $this->m_carik->searchs($keyword);
        $this->load->view('notulensi_rapat',$data);
    }
}
