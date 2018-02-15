<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		//Load Dependencies
	}
	public function index()
	{
		$data['content'] = $this -> db-> get('users');
		$this->load->view('user/edit_profil',$data);
	}
	
}

