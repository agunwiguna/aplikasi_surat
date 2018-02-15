<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
  }

  public function index()
  {
    $data['jumlah_masuk'] = $this->model_wilayah->jumlah_masuk(); 
    $data['jumlah_keluar'] = $this->model_wilayah->jumlah_keluar();
    $data['jumlah_rapat'] = $this->model_wilayah->jumlah_rapat();
    $this->load->view('admin/home',$data);
  }
}