<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    	if ($this->session->userdata('level') == "admin") 
    	{
      		redirect('admin/admin');
		}
	}

  public function index()
  {
    $this->load->view('user/dashboard');
  }
}
?>