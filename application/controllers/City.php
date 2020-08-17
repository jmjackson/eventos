<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('City_model'));
  }

  public function index()
  {

    $datos = array('cities' =>$this->City_model->GetCity() , );
    $this->load->view('layouts/head');
    $this->load->view('City/index',$datos);
    $this->load->view('layouts/footer');
  }
  public function details($id)
  {
    $datos = array('city' =>$this->City_model->GetCitybyId($id) );
    $this->load->view('layouts/head');
    $this->load->view('City/details',$datos);
    $this->load->view('layouts/footer');
  }
  public function edit($id)
  {
    // code...
  }
  public function Update()
  {
    // code...
  }

  public function delete($id)
  {
    // code...
  }
}
