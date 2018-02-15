<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
		 // konfigurasi helper & library
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
        $this->load->model('cari_profil');
	}

	public function index()
	{
		// konfigurasi class pagination
        $config['base_url']=base_url()."profil/index";
        $config['total_rows']= $this->db->query("SELECT * FROM users;")->num_rows();
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
        $this->load->model('m_profil');
        $data['user']=$this->m_profil->getAll($config);
        $this->load->view('profil', $data);
	}
	//Add Item
	public function action_add()
	{
		$data = array(
			'username' => $this -> input -> post('username') ,
			'password' => md5($this -> input -> post('password')) ,
			'level' => $this -> input -> post('level'),
			'active' => $this -> input -> post('active'),
		);
		$this -> db-> insert('users',$data);
		redirect ('profil');
	}
	//Update one item
	public function update($id = NULL)
	{
		$this -> db-> where('id',$id);
		$data['content'] = $this -> db-> get('users');
		$this -> load -> view('admin/update_profil',$data);	
	}
	public function action_update($id='')
	{
		$data = array(
			'username' => $this -> input -> post('username') ,
			'password' => md5($this -> input -> post('password')) ,
			'level' => $this -> input -> post('level'),
			'active' => $this -> input -> post('active'), 
		);
		$this -> db-> where('id',$id);
		$this -> db-> update('users',$data);
		redirect ('profil');
	}
	//Delete one item
	public function delete($id = NULL)
	{
		$this -> db-> where('id',$id);
		$this -> db-> delete('users');

		redirect ('profil');	
	}
	function search_keyword()
    {
        $keyword    	= $this->input->post('keyword');
        $data['user']   = $this->cari_profil->search($keyword);
        $this->load->view('profil',$data);
    }
    //Update one item
	public function update_user()
	{
		$username = $this->session->userdata('username');
		$this -> db-> where('username',$username);
		$data['content'] = $this -> db-> get('users')->row();
		$this -> load -> view('user/edit_profil',$data);	
	}
	public function action_user()
	{
		$data = array(
			'password' => md5($this -> input -> post('password')) ,
		);
		$username = $this->session->userdata('username');
		$this -> db-> where('username',$username);
		$this -> db-> update('users',$data);
		redirect ('user');
	}

}
