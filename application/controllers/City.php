<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->view('layouts/head');
    $this->load->view('City/index');
    $this->load->view('layouts/footer', $data);
  }

}
