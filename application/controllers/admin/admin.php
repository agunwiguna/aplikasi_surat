<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    //memanggil function dari MY_Controller
    $this->cekLogin();
    //validasi jika session dengan level user mengakses halaman ini maka akan dialihkan ke halaman users
    if ($this->session->userdata('level') == "user") {
      redirect('user/user');
    }
}

  public function index()
  {
    $this->load->view('admin/home');
  }
}