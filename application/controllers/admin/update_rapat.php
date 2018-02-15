<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_rapat extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		//Load Dependencies
	}
	public function index()
	{
		$this->load->view('admin/update_rapat');
	}
}

